<?php

namespace App\Exports;
use  App\Models\poem_rawy;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return poem_rawy::all();
    }
}
