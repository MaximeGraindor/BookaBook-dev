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
            'firstname' => 'Maxime',
            'name' => 'Graindor',
            'email' => 'maxime.graindor@hotmail.com',
            'group' => '2384',
            'picture_path' => 'profilePicture.png',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testDev'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        User::factory()->count(100)->create();
    }
}
