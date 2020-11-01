<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_brand')->insert(array(
            array(
                'id' => 1,
                'category_id' => 1,
                'brand_id' => 1
            ),
            array(
                'id' => 2,
                'category_id' => 1,
                'brand_id' => 2
            ),
            array(
                'id' => 3,
                'category_id' => 1,
                'brand_id' => 3
            ),
            array(
                'id' => 4,
                'category_id' => 1,
                'brand_id' => 4
            ),
            array(
                'id' => 5,
                'category_id' => 1,
                'brand_id' => 5
            ),
            array(
                'id' => 6,
                'category_id' => 2,
                'brand_id' => 6
            ),
            array(
                'id' => 7,
                'category_id' => 2,
                'brand_id' => 7
            ),
            array(
                'id' => 8,
                'category_id' => 2,
                'brand_id' => 8
            ),
            array(
                'id' => 9,
                'category_id' => 2,
                'brand_id' => 9
            ),
            array(
                'id' => 10,
                'category_id' => 2,
                'brand_id' => 10
            ),
            array(
                'id' => 11,
                'category_id' => 3,
                'brand_id' => 11
            ),
            array(
                'id' => 12,
                'category_id' => 3,
                'brand_id' => 12
            ),
            array(
                'id' => 13,
                'category_id' => 3,
                'brand_id' => 13
            ),
            array(
                'id' => 14,
                'category_id' => 3,
                'brand_id' => 14
            ),
            array(
                'id' => 15,
                'category_id' => 3,
                'brand_id' => 15
            ),
           
        ));
    }
}
