<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BranchesSeeder::class);
        $this->call(IncentiveSeeder::class);

        User::create([
            'branches_id' => 1,
            'incentive_id' => 3,
            'role' => 'admin',
            'name' => 'IT Nusamba Tegallalang',
            'position' => 'IT',
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'branches_id' => 1,
            'incentive_id' => 1,
            'role' => 'operator',
            'name' => 'I Wayan Suardana',
            'position' => 'Kabid Kredit',
            'username' => 'kredit',
            'password' => bcrypt('kredit')
        ]);

        User::create([
            'branches_id' => 1,
            'incentive_id' => 2,
            'role' => 'user',
            'name' => 'Arik Arnawa',
            'position' => 'AO Pusat',
            'username' => 'ao1',
            'password' => bcrypt('12345')
        ]);








        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
