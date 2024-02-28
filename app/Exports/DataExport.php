<?php

namespace App\Exports;

use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            'Data 1',
            'Data 2',
            'Status',
            'Tanggal'
        ];
    }

    public function collection()
    {
        return $this->data;
    }
}
