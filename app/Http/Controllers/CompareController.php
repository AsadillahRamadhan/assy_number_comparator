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
        if(Auth::user()->type == 'staff'){
            $data = Data::where('type', 'staff')->orderBy('created_at', 'desc')->get();
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

        $fixedData1 = implode('', explode('-', $data_1[0]));
        $temp_2_1 = explode(',', $data_2[1]);
        $temp_2_2 = explode(' ', $temp_2_1[0]);
        $fixedData2 = $temp_2_2[0];



        // if(strlen($fixedData1) == 11){
        //     $part1 = substr($data_2[1], 0, 5);
        //     $part2 = substr($data_2[1], 5);
        //     $fixedData2 = $part1 . '-' . $part2;
        //     $fixedData2 = substr($fixedData2, 0, strlen($fixedData1));
        // } else {
        //     $part1 = substr($data_2[1], 0, 5);
        //     $part2 = substr($data_2[1], 5, 10);
        //     $part3 = substr($data_2[1], 10);
            
        //     $fixedData2 = $part1 . '-' . $part2 . '-' . $part3;
        //     $fixedData2 = substr($fixedData2, 0, strlen($fixedData1));

        // }
        

        $comparator = 0;
        if($fixedData1 == $fixedData2){
            $comparator = 1;
        }

        Data::create([
            'data_1' => $request->post('data_1'),
            'data_2' => $request->post('data_2'),
            'status' => $comparator,
            'date' => Carbon::now(),
            'type' => (Auth::user()->type == 'super_staff' || Auth::user()->type == 'staff') ? 'staff' : 'export'
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
        $data = Data::select('data_1', 'data_2', 'status', 'date')->whereBetween('created_at', [$start_date, $end_date])->get();

        $data = $data->map(function ($d) {
            $d->status = $d->status == 1 ? 'OK' : 'N-OK';
            return $d;
        });

        return Excel::download(new DataExport($data), "data_mulai_" . $request->post('start_date') . "_sampai_" . $request->post('end_date') . ".xlsx");
    }

    public function destroy($id){
        Data::find($id)->delete();
        return back();
    }
}
