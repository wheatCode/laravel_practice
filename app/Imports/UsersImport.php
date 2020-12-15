<?php

namespace App\Imports;

use App\Models\Excel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Excel([
            'row1' => $row[0],
            'row2' => $row[1],
            'row3' => $row[2],
         ]);
    }
}
