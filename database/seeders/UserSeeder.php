<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
            'name' => 'Maxime Graindor',
            'email' => 'maxime.graindor@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testDev'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        User::insert([
            'name' => 'User Testing',
            'email' => 'user.testing@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testDev'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
