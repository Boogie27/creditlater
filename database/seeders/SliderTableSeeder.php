<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:s:i", time());
        DB::table('sliders')->insert(array(
            'id' => 1,
            'slider_name' => 'camera',
            'slider_image' => 'web/images/layout-1/slider/1.2.png',
            'header_one' => 'the best',
            'header_two' => 'omega camera',
            'header_three' => 'minimum 20% off',
            'date_added' => $date,
            'last_modified' => $date,
            'is_feature' => 1
        ));

        DB::table('sliders')->insert(array(
            'id' => 2,
            'slider_name' => 'shoes',
            'slider_image' => 'web/images/layout-1/slider/1.1.png',
            'header_one' => 'the best',
            'header_two' => 'loffers shoes',
            'header_three' => 'minimum 30% off',
            'date_added' => $date,
            'last_modified' => $date,
            'is_feature' => 1
        ));

        DB::table('sliders')->insert(array(
            'id' => 3,
            'slider_name' => 'bags',
            'slider_image' => 'web/images/layout-1/slider/1.3.png',
            'header_one' => 'the best',
            'header_two' => 'classic bags',
            'header_three' => 'minimum 40% off',
            'date_added' => $date,
            'last_modified' => $date,
            'is_feature' => 1
        ));

        DB::table('sliders')->insert(array(
            'id' => 4,
            'slider_name' => 'shoes',
            'slider_image' => 'web/images/layout-1/slider/1.1.png',
            'header_one' => 'the best',
            'header_two' => 'loffer shoes',
            'header_three' => 'minimum 20% off',
            'date_added' => $date,
            'last_modified' => $date,
            'is_feature' => 1
        ));
    }
}
