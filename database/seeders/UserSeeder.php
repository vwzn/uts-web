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
    
        $users = [
            [
                "email"       => "1@gmail.com",
                'password' => '12345',
                'role_id' => '1',
            ]
        ];
        foreach ($users as $user) {
            User::Create([
                "user" => $user["user"],
                "password" => $user["password"],
                "role_id" => $user["role_id"],
            ]);
        }

    }
}
