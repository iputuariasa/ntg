<?php

namespace Database\Seeders;

use App\Models\Incentive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncentiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Incentive::create([
            'name_incentive' => 'KKK & KABID'
        ]);

        Incentive::create([
            'name_incentive' => 'AO'
        ]);

        Incentive::create([
            'name_incentive' => 'STAF & NON STAF'
        ]);
    }
}
