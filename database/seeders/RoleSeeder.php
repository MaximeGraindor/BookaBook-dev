<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'name'=> 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Role::insert([
            'name'=> 'student',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
