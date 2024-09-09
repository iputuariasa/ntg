<?php

namespace Database\Seeders;

use App\Models\Branches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branches::create([
            'code_branch' => '001',
            'name_branch' => 'Kantor Pusat Operasional'
        ]);

        Branches::create([
            'code_branch' => '002',
            'name_branch' => 'Kantor Cabang Bangli'
        ]);
    }
}
