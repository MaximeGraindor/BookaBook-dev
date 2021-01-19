<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Sale;
use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $books = Book::all();
        $academicYearId = AcademicYear::all()->first()->id;

        foreach ($books as $book) {
            Sale::insert([
                'academic_year_id' => $academicYearId,
                'book_id' => $book->id,
                'public_price' => 20.00,
                'student_price' => 20.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
