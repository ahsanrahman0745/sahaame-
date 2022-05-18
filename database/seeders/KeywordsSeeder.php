<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\keywords;
class KeywordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        keywords::truncate();
        $list=[
            'name'=>'test1',
            'name'=>'test2',
        ];
            keywords::insert($list);
    }
}