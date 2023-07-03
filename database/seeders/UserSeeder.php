<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Administrator',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin'),
            ],
            [
                'name'=>'Dummy User',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('user'),
            ]
        ];
        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
