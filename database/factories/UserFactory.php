<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' =>  $this->faker->unique()->name(),
            'email' =>  $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'profile' =>  $this->faker->imageUrl(width: 640, height:480),
            'type'  => $this->faker->randomElement([0, 1]),
            'phone' => $this->faker->e164PhoneNumber(),
            'address' => $this->faker->text(10),
            'dob' => now(),
            'created_user_id' => 1,
            'updated_user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
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
