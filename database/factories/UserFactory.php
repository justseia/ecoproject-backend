<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => 'Aidana',
            'email' => '27777@iitu.edu.kz',
            'password' => Hash::make('asdasdasd'),
            'image' => 'https://api.dicebear.com/6.x/thumbs/png?seed=Buster',
            'remember_token' => Str::random(10),
        ];
    }
}
