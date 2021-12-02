<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $password = "123456";
      //date($format = 'Y-m-d', $max = 'now')
        return [
            'name' => 'Thabo',
            'surname' => 'Admin',
            'role_id' => 1,
            'omang' => 76123456,
           // 'email' => $this->faker->unique()->safeEmail,
           'email' => 'admin@medicalapp.com',
            'email_verified_at' => now(),
            'password' => Hash::make($password), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
