<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:s:i", time());

        DB::table('categories')->insert(array(
            array(
                'id' => 1,
                'category_name' => 'fashion',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/01.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/1.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 2,
                'category_name' => 'book',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/02.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/2.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 3,
                'category_name' => 'sports',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/03.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/3.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 4,
                'category_name' => 'electronics',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/04.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/4.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 5,
                'category_name' => 'toys',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/05.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/5.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 6,
                'category_name' => 'footwares',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/06.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/6.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 7,
                'category_name' => 'games',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/07.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/1.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
            array(
                'id' => 8,
                'category_name' => 'adventure',
                'category_banner_image' => 'web/images/category/1.jpg',
                'category_image' => 'web/images/layout-1/nav-img/08.png',
                'round_cat_image' => 'web/images/layout-1/rounded-cat/3.png',
                'category_icon' => 120,
                'parent_id' => 0,
                'sort_order' => 0,
                'date_added' => $date,
                'last_modified' => $date,
                'category_status' => 1,
                'is_feature' => 1
            ),
        ));
    }
}
