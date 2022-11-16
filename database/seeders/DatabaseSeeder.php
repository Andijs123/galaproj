<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
    // public function run()
    // {
    //     \App\Models\datu_ievade::factory(10)->create();

    //     \App\Models\datu_ievade::factory()->create([
    //         'id' => '1',
    //         'name' => '2',
    //     ]);
    // }
}
