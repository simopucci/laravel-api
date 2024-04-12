<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_admin = new User;

        $user_admin->email = 'hello@simone.com';
        $user_admin->name = 'Simone';
        $user_admin->password = Hash::make('password');

        $user_admin->save();
    }
}
