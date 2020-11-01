<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSoldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:s:i", time());

        DB::table('product_solds')->insert(array(
            array(
                'id' => 1,
                'product_id' => 1,
                'products_qty_sold' => 5,
                'products_price' => 5000,
                'total_price' => 400000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 2,
                'product_id' => 2,
                'products_qty_sold' => 6,
                'products_price' => 10000,
                'total_price' => 470000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 3,
                'product_id' => 3,
                'products_qty_sold' => 2,
                'products_price' => 6000,
                'total_price' => 50000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 4,
                'product_id' => 4,
                'products_qty_sold' => 10,
                'products_price' => 8000,
                'total_price' => 300000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 5,
                'product_id' => 5,
                'products_qty_sold' => 5,
                'products_price' => 90000,
                'total_price' => 200000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 6,
                'product_id' => 6,
                'products_qty_sold' => 7,
                'products_price' => 9000,
                'total_price' => 300000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 7,
                'product_id' => 7,
                'products_qty_sold' => 5,
                'products_price' => 10000,
                'total_price' => 200000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 8,
                'product_id' => 8,
                'products_qty_sold' => 10,
                'products_price' => 9000,
                'total_price' => 300000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 9,
                'product_id' => 9,
                'products_qty_sold' => 8,
                'products_price' => 7000,
                'total_price' => 200000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 10,
                'product_id' => 10,
                'products_qty_sold' => 10,
                'products_price' => 9000,
                'total_price' => 90000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 11,
                'product_id' => 11,
                'products_qty_sold' => 5,
                'products_price' => 10000,
                'total_price' => 89000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 12,
                'product_id' => 12,
                'products_qty_sold' => 10,
                'products_price' => 3000,
                'total_price' => 570000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 13,
                'product_id' => 13,
                'products_qty_sold' => 5,
                'products_price' => 2000,
                'total_price' => 220000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 14,
                'product_id' => 14,
                'products_qty_sold' => 10,
                'products_price' => 4000,
                'total_price' => 390000,
                'product_sold_date' => $date
            ),
            array(
                'id' => 15,
                'product_id' => 15,
                'products_qty_sold' => 5,
                'products_price' => 6000,
                'total_price' => 240000,
                'product_sold_date' => $date
            ),
        ));
    }
}
