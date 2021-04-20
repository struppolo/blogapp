<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
    User::insert([
            'name' => 'Admin',
            'email' => 'admin@infobasic.it',
            'password' => Hash::make('ciaociao'),
            ]);
    User::insert([
        'name' => 'Emanuele Speca',
        'email' => 'e.speca@infobasic.it',
        'password' => Hash::make('ciaociao'),
        ]);
    
        }

    }

