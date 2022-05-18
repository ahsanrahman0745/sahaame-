<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\businesses;

class BusinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        businesses::factory(20)->create();
    }
}