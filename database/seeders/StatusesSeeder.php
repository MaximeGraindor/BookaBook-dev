<?php

namespace Database\Seeders;

use App\Models\statuses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statuses::insert([
            'name' => 'En attente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'Confirmé',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'Archivé',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
