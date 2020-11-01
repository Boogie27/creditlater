<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $date = date("Y-m-d H:i:s", time());
        $product_detail =  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.";
       
       
        $product_description =  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make

                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages,and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
       
            DB::table('products')->insert(array(
                array(
                    "id" => 1,
                    "products_name" => "phone",
                    "products_quantity" => 5,
                    "category_id" => 1,
                    "brand_id" => 1,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/1.jpg,web/images/layout-1/product/a1.jpg",
                    "products_price" => "10000",
                    "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => '',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "fashion",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 2,
                    "products_name" => "laptop",
                    "products_quantity" => 8,
                    "category_id" => 2,
                    "brand_id" => 2,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/a2.jpg,web/images/layout-1/product/2.jpg",
                    "products_price" => "10000",
                    "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => '',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "book",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 3,
                    "products_name" => "ladies gown",
                    "products_quantity" => 9,
                    "category_id" => 3,
                    "brand_id" => 3,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/3.jpg,web/images/layout-1/product/a3.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "sport",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 4,
                    "products_name" => "bag",
                    "products_quantity" => 4,
                    "category_id" => 4,
                    "brand_id" => 4,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/4.jpg,web/images/layout-1/product/a4.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "electronics",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 5,
                    "products_name" => "men shoe",
                    "products_quantity" => 10,
                    "category_id" => 5,
                     "brand_id" => 5,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/5.jpg,web/images/layout-1/product/a5.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "toys",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));
        
            DB::table('products')->insert(array(
                array(
                    "id" => 6,
                    "products_name" => "necklace",
                    "products_quantity" => 11,
                    "category_id" => 6,
                    "brand_id" => 6,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/6.jpg,web/images/layout-1/product/a6.jpg",
                    "products_price" => "12000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "footwares",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 7,
                    "products_name" => "speaker",
                    "products_quantity" => 16,
                    "category_id" => 1,
                    "brand_id" => 7,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/7.jpg,web/images/layout-1/product/a7.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "games",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 8,
                    "products_name" => "freezer",
                    "products_quantity" => 50,
                    "category_id" => 2,
                    "brand_id" => 8,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/8.jpg,web/images/layout-1/product/a8.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 1,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "adventure",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 9,
                    "products_name" => "phone",
                    "products_quantity" => 18,
                    "category_id" => 3,
                    "brand_id" => 1,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/7.jpg,web/images/layout-1/product/a7.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => '',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "fashion",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 10,
                    "products_name" => "necklace",
                    "products_quantity" => 12,
                    "category_id" => 4,
                    "brand_id" => 2,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/6.jpg,web/images/layout-1/product/a6.jpg",
                    "products_price" => "10000",
                     "products_price_slash" => 0,
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,large,xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "book",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            
       
            DB::table('products')->insert(array(
                array(
                    "id" => 11,
                    "products_name" => "bag",
                    "products_quantity" => 17,
                    "category_id" => 5,
                     "brand_id" => 5,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/a4.jpg,web/images/layout-1/product/4.jpg",
                    "products_price" => "20000",
                     "products_price_slash" => "10000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "sports",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 12,
                    "products_name" => "laptop",
                    "products_quantity" => 44,
                    "category_id" => 6,
                    "brand_id" => 4,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/2.jpg,web/images/layout-1/product/a2.jpg",
                    "products_price" => "13000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => '',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "electronics",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 13,
                    "products_name" => "dress",
                    "products_quantity" => 22,
                    "category_id" => 1,
                    "brand_id" => 6,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/3.jpg,web/images/layout-1/product/a3.jpg",
                    "products_price" => "16000",
                     "products_price_slash" => "7000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "toys",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 14,
                    "products_name" => "shoes",
                    "products_quantity" => 10,
                    "category_id" => 2,
                    "brand_id" => 7,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/5.jpg,web/images/layout-1/product/a5.jpg",
                    "products_price" => "18000",
                    "products_price_slash" => "9000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "games",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 15,
                    "products_name" => "sound system",
                    "products_quantity" => 30,
                    "category_id" => 3,
                    "brand_id" => 8,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/7.jpg,web/images/layout-1/product/a7.jpg",
                    "products_price" => "90000",
                     "products_price_slash" => "5000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "adventure",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));
        
            DB::table('products')->insert(array(
                array(
                    "id" => 16,
                    "products_name" => "freezer",
                    "products_quantity" => 26,
                    "category_id" => 4,
                    "brand_id" => 3,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/8.jpg,web/images/layout-1/product/a8.jpg",
                    "products_price" => "17000",
                    "products_price_slash" => "8500",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "fashion",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 17,
                    "products_name" => "laptop",
                    "products_quantity" => 19,
                    "category_id" => 5,
                    "brand_id" => 5,
                     "brand_id" => 5,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/2.jpg,web/images/layout-1/product/a2.jpg",
                    "products_price" => "15000",
                     "products_price_slash" => "8000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => '',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "book",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 18,
                    "products_name" => "ladies dress",
                    "products_quantity" => 35,
                    "category_id" => 6,
                    "brand_id" => 6,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/3.jpg,web/images/layout-1/product/a3.jpg",
                    "products_price" => "9000",
                     "products_price_slash" => "4500",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "sports",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 19,
                    "products_name" => "bag",
                    "products_quantity" => 37,
                    "category_id" => 1,
                    "brand_id" => 8,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/4.jpg,web/images/layout-1/product/a4.jpg",
                    "products_price" => "11000",
                     "products_price_slash" => "6000",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large, xtra large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "electronics",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));

            DB::table('products')->insert(array(
                array(
                    "id" => 20,
                    "products_name" => "necklace",
                    "products_quantity" => 15,
                    "category_id" => 2,
                    "brand_id" => 2,
                    "products_model" => "",
                    "products_image" => "web/images/layout-1/product/6.jpg,web/images/layout-1/product/a6.jpg",
                    "products_price" => "17000",
                     "products_price_slash" => "8500",
                    "products_date_added" => $date,
                    "products_last_modified" => $date,
                    "products_date_available" => $date,
                    "products_detail" => $product_detail,
                    "products_description" => $product_description,
                    "products_type" => 'small,medium, large',
                    "products_video_link" => 'https://www.youtube.com/embed/BUWzX78Ye_8',
                    "products_status" => true,
                    "is_current" => true,
                    "is_special" => 0,
                    "manufacturers_id" => 1,
                    "products_ordered" => 0,
                    "products_liked" => 8,
                    "low_limit" => "0",
                    "is_feature" => 1,
                    "products_slug" => "toys",
                    "products_min_order" => 0,
                    "products_max_stock" => 0
                )
                
            ));
        

            

    }
}
