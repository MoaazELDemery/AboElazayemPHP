<?php

namespace App\Exports;

use App\Models\ExcelA;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExcelA::all();
    }
}