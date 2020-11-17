<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use App\Models\Statuses;
use App\Models\AcademicYear;
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

        /* $users = User::all();
        $status = Statuses::all();

        $draftStatus = Statuses::where('name', '=', 'Brouillon')->first();

        foreach ($users as $user){
            $order = Order::create([
                'user_id' => $user->id,
                'academic_year_id' => 1
            ]);

            $order->status()->attach(4);

            $books = Book::all()->shuffle();
            $books = $books->take(rand(1, 5));
            foreach ($books as $book){
                $order->books()->attach($book->id);
            }
        } */
    }
}
