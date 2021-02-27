<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'id' => $row[0],
            'nim' => $row[1],
            'nik' => $row[2],
            'nisn' => $row[3],
            'npwp' => $row[4],
            'name' => $row[5],
            'birth_place_id' => $row[6],
            'birth_date_id'=> $row[7],
            'gender_id' => $row[8],
            'religion_id' => $row[9],
            'country' => $row[10],
            'alat_transportasi' => $row[11],
            'telephone' => $row[12],
            'email' => $row[13],
            'kps'=> $row[14],
        ]);
    }
}
