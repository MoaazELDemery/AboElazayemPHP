<?php

namespace App\Imports;

use App\Models\poem_rawy;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {  
        return new poem_rawy([
            'right_ar'     => $row['right_ar'],
            'left_ar'    => $row['left_ar'], 
        ]);


    }
}
