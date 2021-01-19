<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
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
        $admin = User::where('name', 'Graindor')->first();
        $roleId = Role::where('name', 'admin')->first()->id;
        $admin->roles()->attach($roleId);

        /*RoleUser::insert([
            'user_id' => '1',
            'role_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);*/

        $otherUsers = User::all()->skip(1);

        foreach ($otherUsers as $user){
            $user->roles()->attach(Role::where('name', 'student')->first()->id);
        }
    }
}
