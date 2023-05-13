<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([

            // Admin Seeder Data
            [
                'name' => 'Admin',
                'username' =>'Admin',
                'email'=> 'admin@gmail.com',
                'password' =>Hash::make('raymkindo'),
                'role' =>'admin',
                'status' => 'active',
            ],
            // AGent Seeder Data
            [
                'name' => 'Agent',
                'username' =>'Agent',
                'email'=> 'agent@gmail.com',
                'password' =>Hash::make('agent'),
                'role' =>'agent',
                'status' => 'active',
            ],

            // User Seeder Data
            [
                'name' => 'User',
                'username' =>'User',
                'email'=> 'user@gmail.com',
                'password' =>Hash::make('user'),
                'role' =>'user',
                'status' => 'active',
            ]

        ]);

    }
}
