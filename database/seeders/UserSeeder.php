<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
            User::Create([
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin123"),
                "role_id" => 1,
            ]);        
    }
}
