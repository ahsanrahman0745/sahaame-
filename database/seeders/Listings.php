<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
class Listings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::factory(10)->create();
    }
}