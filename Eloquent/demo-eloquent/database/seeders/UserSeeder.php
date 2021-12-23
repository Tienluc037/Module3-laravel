<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Admin";
        $user->email = "Admin@gmail.com";
        $user->password = "123123";
        $user-> save();

      User::factory(10)->create();
    }
}
