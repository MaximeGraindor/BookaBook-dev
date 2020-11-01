<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all()->skip(1);


        foreach ($users as $user) {
            $order = Order::create([
                'user_id' => $user->id
            ]);
        }
    }
}
