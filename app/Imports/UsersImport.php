<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Mapping cabang ke branches_id
        $cabangMapping = [
            'Kantor Pusat Operasional' => 1,
            'Kantor Cabang Bangli'     => 2
        ];

        // Mapping insentif ke incentive_id
        $insentifMapping = [
            'KKK & KABID' => 1,
            'AO' => 2,
            'STAF & NON STAF' => 3
        ];

        return new User([
            'branches_id' => $cabangMapping[$row['cabang']] ?? null, // Ambil nilai mapping atau null jika tidak ada
            'incentive_id' => $insentifMapping[$row['insentif']] ?? null, // Ambil nilai mapping atau null jika tidak ada
            'role'        => $row['role'],
            'name'        => $row['nama'],
            'position'    => $row['jabatan'],
            'username'    => $row['username'],
            'password'    => Hash::make($row['password'])
        ]);
    }
}
