<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicYear::insert([
            'starting_year' => '2020-08-15',
            'ending_year' => '2020-08-15',
        ]);
    }
}
