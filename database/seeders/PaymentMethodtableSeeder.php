<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $date = date("Y-m-d H:s:i", time());

        DB::table('payment_methods')->insert(array(
            array(
                'id' => 1,
                'payment_method_name' => 'visa',
                'payment_link' => '',
                'payment_method_image' => 'web/images/layout-1/pay/1.png',
                'date_added' => $date,
                 'active' => 1,
                'date_removed' => $date
            ),
            array(
                'id' => 2,
                'payment_method_name' => 'mmaster card',
                'payment_link' => '',
                'payment_method_image' => 'web/images/layout-1/pay/2.png',
                'date_added' => $date,
                 'active' => 1,
                'date_removed' => $date
            ),
            array(
                'id' => 3,
                'payment_method_name' => 'pay pal',
                'payment_link' => '',
                'payment_method_image' => 'web/images/layout-1/pay/3.png',
                'date_added' => $date,
                 'active' => 1,
                'date_removed' => $date
            ),
            array(
                'id' => 4,
                'payment_method_name' => 'unkown',
                'payment_link' => '',
                'payment_method_image' => 'web/images/layout-1/pay/4.png',
                'date_added' => $date,
                 'active' => 1,
                'date_removed' => $date
            ),
            array(
                'id' => 5,
                'payment_method_name' => 'unkown',
                'payment_link' => '',
                'payment_method_image' => 'web/images/layout-1/pay/5.png',
                'date_added' => $date,
                 'active' => 1,
                'date_removed' => $date
            ),
        ));
    }
}
