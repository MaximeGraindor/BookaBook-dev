<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
           'name' => 'HTML5 Pocket Reference',
           'author' => 'Jennifer Robbins',
           'publisher' => 'O\'Reilly Media, Inc',
           'ISBN' => '9781449363352',
            'public_price' => '17,00',
            'offered_price' => '17,00',
            'editing_details' => '',
            'cover_path' => 'HTML5PocketReference.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
