<?php

namespace Database\Seeders;

use App\Models\BookAuthor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookAuthor::insert([
            'book_id' => '1',
            'author_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '2',
            'author_id' => '12',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '3',
            'author_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '4',
            'author_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '5',
            'author_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '7',
            'author_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '8',
            'author_id' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '9',
            'author_id' => '6',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '10',
            'author_id' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '11',
            'author_id' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '12',
            'author_id' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '13',
            'author_id' => '8',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '14',
            'author_id' => '9',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '15',
            'author_id' => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '16',
            'author_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        BookAuthor::insert([
            'book_id' => '17',
            'author_id' => '11',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}
