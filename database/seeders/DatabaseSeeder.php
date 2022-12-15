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
            'name' => 'Usuario 1',
            'email' => 'Usuario1@example.com',
            'money' => 1000,
            'password' => "123",
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Usuario 2',
            'email' => 'Usuario2@example.com',
            'money' => 4500,
            'password' => "243",
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Usuario 3',
            'email' => 'Usuario3@example.com',
            'money' => 3200,
            'password' => "345",
        ]);
    }
}
