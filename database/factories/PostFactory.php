<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     */

    protected $model = Post::class;
    public function definition()
    {
        DB::table('posts')->truncate(); // auto increment kill to set 0
        $users = DB::table('users')->pluck('id');
        return [
            'title' => $this->faker->unique()->sentence(8),
            'description' =>  $this->faker->text(50),
            'status' => $this->faker->randomElement([0, 1]),
            'created_user_id' => $this->faker->randomElement($users),
            'updated_user_id' => $this->faker->randomElement($users),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
