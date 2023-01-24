<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $users = User::pluck('id');
        return [
            'title'=> $this->faker->unique()->sentence(8),
            'description'=>  $this->faker->text(50),
            'status'=>'1',
            'created_user_id'=> $this->faker->randomElement($users),
            'updated_user_id'=> $this->faker->randomElement($users),
            'deleted_user_id'=> $this->faker->randomElement($users),
            'created_at'=> now(),
            'updated_at'=> now(),
            'deleted_at'=> now(), 
        ];
    }
}
