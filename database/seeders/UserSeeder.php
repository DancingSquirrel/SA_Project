<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "toto";
        $user->role = "admin";
        $user->first_name = "saran";
        $user->last_name = "wongkum";
        $user->email = "wongkum55@gmail.com";
        $user->password = "password";
        $user->phone_number = "0618204866";
        $user->save();



        $user = User::factory()->count(5)->create();
        }
        

}