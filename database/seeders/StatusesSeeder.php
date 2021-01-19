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
            'name' => 'brouillon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'en attente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'payé',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'validé',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        statuses::insert([
            'name' => 'archivé',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
