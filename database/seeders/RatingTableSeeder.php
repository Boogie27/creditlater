<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert(array(
            array(
                'id' => 1,
                'products_name' => 'phone',
                'product_id' => 1,
                'rating_count' => 7,
                'rating_total' => 20,
                'user_ratings' => '',
            ),
            array(
                'id' => 2,
                'products_name' => 'laptop',
                'product_id' => 2,
                'rating_count' => 6,
                'rating_total' => 15,
                'user_ratings' => '',
            ),
            array(
                'id' => 3,
                'products_name' => 'ladies gown',
                'product_id' => 3,
                'rating_count' => 5,
                'rating_total' => 14,
                'user_ratings' => '',
            ),
            array(
                'id' => 4,
                'products_name' => 'bag',
                'product_id' => 4,
                'rating_count' => 4,
                'rating_total' => 12,
                'user_ratings' => '',
            ),
            array(
                'id' => 5,
                'products_name' => 'men shoe',
                'product_id' => 5,
                'rating_count' => 8,
                'rating_total' => 27,
                'user_ratings' => '',
            ),
            array(
                'id' => 6,
                'products_name' => 'necklace',
                'product_id' => 6,
                'rating_count' => 8,
                'rating_total' => 24,
                'user_ratings' => '',
            ),
            array(
                'id' => 7,
                'products_name' => 'speaker',
                'product_id' => 7,
                'rating_count' => 6,
                'rating_total' => 23,
                'user_ratings' => '',
            ),
            array(
                'id' => 8,
                'products_name' => 'freezer',
                'product_id' => 8,
                'rating_count' => 5,
                'rating_total' => 20,
                'user_ratings' => '',
            ),
            array(
                'id' => 9,
                'products_name' => 'phone',
                'product_id' => 9,
                'rating_count' => 4,
                'rating_total' => 17,
                'user_ratings' => '',
            ),
            array(
                'id' => 10,
                'products_name' => 'necklace',
                'product_id' => 10,
                'rating_count' => 3,
                'rating_total' => 12,
                'user_ratings' => '',
            ),
            array(
                'id' => 11,
                'products_name' => 'bag',
                'product_id' => 11,
                'rating_count' => 29,
                'rating_total' => 10,
                'user_ratings' => '',
            ),
            array(
                'id' => 12,
                'products_name' => 'laptop',
                'product_id' => 12,
                'rating_count' => 9,
                'rating_total' => 28,
                'user_ratings' => '',
            ),
            array(
                'id' => 13,
                'products_name' => 'dress',
                'product_id' => 13,
                'rating_count' => 8,
                'rating_total' => 26,
                'user_ratings' => '',
            ),
            array(
                'id' => 14,
                'products_name' => 'shoes',
                'product_id' => 14,
                'rating_count' => 7,
                'rating_total' => 24,
                'user_ratings' => '',
            ),
            array(
                'id' => 15,
                'products_name' => 'sound system',
                'product_id' => 15,
                'rating_count' => 6,
                'rating_total' => 21,
                'user_ratings' => '',
            ),
            array(
                'id' => 16,
                'products_name' => 'freezer',
                'product_id' => 16,
                'rating_count' => 7,
                'rating_total' => 20,
                'user_ratings' => '',
            ),
            array(
                'id' => 17,
                'products_name' => 'laptop',
                'product_id' => 17,
                'rating_count' => 6,
                'rating_total' => 15,
                'user_ratings' => '',
            ),
            array(
                'id' => 18,
                'products_name' => 'ladies dress',
                'product_id' => 18,
                'rating_count' => 5,
                'rating_total' => 14,
                'user_ratings' => '',
            ),
        ));
    }
}
