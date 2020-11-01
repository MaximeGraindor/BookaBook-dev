<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,

            AuthorSeeder::class,
            BookSeeder::class,
            BookAuthorSeeder::class,
            PublisherSeeder::class,

            AcademicYearSeeder::class,
            OrderSeeder::class,
            BookOrderSeeder::class,
            StatusesSeeder::class
        ]);

    }
}
