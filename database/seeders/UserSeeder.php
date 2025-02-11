<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([  
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password1'), // Use a secure password
        ]);
    }

//     elaqshogroup@gmail.com
// Bondowoso123
}
