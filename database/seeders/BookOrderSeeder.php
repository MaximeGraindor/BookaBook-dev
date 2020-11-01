<?php

namespace Database\Seeders;

use App\Models\BookOrder;
use Illuminate\Database\Seeder;

class BookOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookOrder::insert([
            'book_id' => 1,
            'order_id' => 1,
            'quantity' => 2
        ]);

        BookOrder::insert([
            'book_id' => 2,
            'order_id' => 1,
            'quantity' => 1
        ]);

        BookOrder::insert([
            'book_id' => 3,
            'order_id' => 1,
            'quantity' => 1
        ]);


        BookOrder::insert([
            'book_id' => 4,
            'order_id' => 2,
            'quantity' => 2
        ]);

        BookOrder::insert([
            'book_id' => 5,
            'order_id' => 2,
            'quantity' => 1
        ]);

        BookOrder::insert([
            'book_id' => 6,
            'order_id' => 2,
            'quantity' => 1
        ]);
    }
}
