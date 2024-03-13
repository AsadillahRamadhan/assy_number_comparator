<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CompareController extends Controller
{
    public function index(){
        if(Auth::user()->type == 'scanin'){
            $data = Data::where('type', 'scanin')->orderBy('created_at', 'desc')->get();
        } else if(Auth::user()->type == 'export'){
            $data = Data::where('type', 'export')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Data::orderBy('created_at', 'desc')->get();
        }

        $nok = false;
        foreach($data as $d){
            if($d->status == 0){
                $nok = true;
            }
        }
        return view('compare.index', [
            'data' => $data,
            'nok' => $nok
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'data_1' => 'required',
            'data_2' => 'required'
        ]);

        $data_1 = explode('/', $request->post('data_1'));
        $data_2 = explode(',', $request->post('data_2'));

        $assy1 = implode('', explode('-', $data_1[0]));
        $assy2 = substr($data_2[1], 0, strlen($assy1));

        $qty1 = $data_1[1];
        $qty2 = $data_2[2];
        
        $suffix1 = $data_1[2];
        $suffix2 = substr($data_2[1], strlen($assy1), 1);

        $level1 = $data_1[3];
        $level2 = substr($data_2[1], strlen($assy1) + 1);

        $comparator = 0;
        if($assy1 == $assy2 && $qty1 == $qty2 && $suffix1 == $suffix2 && $level1 == $level2){
            $comparator = 1;
        }

        Data::create([
            'data_1' => $request->post('data_1'),
            'data_2' => $request->post('data_2'),
            'status' => $comparator,
            'date' => Carbon::now(),
            'type' => (Auth::user()->type == 'super_staff' || Auth::user()->type == 'scanin') ? 'scanin' : 'export',
            'created_at' => Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s')
        ]);

        if($comparator == 1){
            return back()->with('message', 'Data Sama!')->with('status', 'success')->with('file', '/voice/data_sama.mp3')->with('nok', false);
        } else {
            return back()->with('message', 'Data Tidak Sama!')->with('status', 'error')->with('file', '/voice/data_tidak_sama.mp3')->with('nok', true);
        }
    }

    public function export(Request $request){
        $start_date = Carbon::parse($request->post('start_date'))->subDay();
        $end_date = Carbon::parse($request->post('end_date'))->addDay();
        
        if(Auth::user()->type == 'super_staff'){
            $data = Data::select('data_1', 'data_2', 'status', 'created_at')->whereBetween('created_at', [$start_date, $end_date])->get();
        } else if(Auth::user()->type == 'scanin'){
            $data = Data::select('data_1', 'data_2', 'status', 'created_at')->whereBetween('created_at', [$start_date, $end_date])->where('type', 'scanin')->get();
        } else if(Auth::user()->type == 'export'){
            $data = Data::select('data_1', 'data_2', 'status', 'created_at')->whereBetween('created_at', [$start_date, $end_date])->where('type', 'export')->get();

        }
        

        $data = $data->map(function ($d) {
            $d->status = $d->status == 1 ? 'OK' : 'N-OK';
            $d->date = Carbon::parse($d->created_at)->format('d-m-Y H:i:s');
            unset($d->created_at);
            return $d;
        });
        

        return Excel::download(new DataExport($data), "data_mulai_" . $request->post('start_date') . "_sampai_" . $request->post('end_date') . ".xlsx");
    }

    public function destroy($id){
        Data::find($id)->delete();
        return back();
    }

    public function truncate(Request $request){
        $start_date = Carbon::parse($request->post('start_date'))->subDay();
        $end_date = Carbon::parse($request->post('end_date'))->addDay();
        Data::whereBetween('created_at', [$start_date, $end_date])->delete();
        return back();
    }
}
