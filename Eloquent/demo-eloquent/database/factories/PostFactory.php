<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->name(),
            "content"=>$this->faker->text(),
           "user_id"=> User::all()->random()->id //lấy ra id bất kì trong bảng user
        ];
    }
}
