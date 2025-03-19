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
            'name' => 'Fuad',
            'email' => 'fuadadhim24@gmail.com',
            'password' => Hash::make('Zhenzhu19!'), 
        ]);
        User::create([  
            'name' => 'Elaqsho Group',
            'email' => 'elaqshogroup@gmail.com',
            'password' => Hash::make('Bondowoso123'), 
        ]);
    }

//     elaqshogroup@gmail.com
// Bondowoso123
}
