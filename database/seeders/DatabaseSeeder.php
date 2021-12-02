<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Eloquent\Factories\Faker\Generator;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        $password = 123456;
        \App\Models\User::factory(1)->create([
            'name' => 'Ngaka',
            'surname' => 'Ngaka',
            'email' => 'ngaka@medicalapp.com',
            'role_id' => 3,
            'omang' => 56123476,
            'email_verified_at' => now(),
            'password' => Hash::make($password), // password
        ]);

        \App\Models\Role::factory()
        ->count(4)
        ->state(new Sequence(
            ['role' => 'Admin'],
            ['role' => 'Patient'],
            ['role' => 'Doctor'],
            ['role' => 'Secretary'],
        ))
        ->create();
    }
}
