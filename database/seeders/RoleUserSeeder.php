<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::insert([
            'user_id' => '1',
            'role_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        RoleUser::insert([
            'user_id' => '2',
            'role_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
