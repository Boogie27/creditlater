<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceRangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('price_ranges')->insert(array(
            array(
                'id' => 1,
                'price_from' => 1000,
                'price_to' => 2000
            ),
            array(
                'id' => 2,
                'price_from' => 3000,
                'price_to' => 4000
            ),
            array(
                'id' => 3,
                'price_from' => 6000,
                'price_to' => 8000
            ),
            array(
                'id' => 4,
                'price_from' => 10000,
                'price_to' => 12000
            ),
            array(
                'id' => 5,
                'price_from' => 14000,
                'price_to' => 16000
            ),
            array(
                'id' => 6,
                'price_from' => 18000,
                'price_to' => 20000
            ),
        ));
    }
}
