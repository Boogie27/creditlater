<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id("id");
            $table->string('products_name');
			$table->integer('products_quantity');
			$table->integer('category_id');
			$table->integer('brand_id');
			$table->string('products_model')->nullable();
			$table->text('products_image')->nullable();
			$table->integer('products_price');
			$table->integer('products_price_slash')->nullable();
			$table->dateTime('products_date_added');
			$table->dateTime('products_last_modified')->nullable();
			$table->dateTime('products_date_available')->nullable();
			$table->string('products_weight')->nullable();
			$table->text('products_detail');
			$table->text('products_description');
			$table->string('products_type')->nullable();
			$table->text('products_video_link')->nullable();
			$table->boolean('products_status');
			$table->boolean('is_current');
			$table->boolean('is_special');
			$table->integer('manufacturers_id')->nullable();
			$table->integer('products_ordered')->default(0);
			$table->integer('products_liked');
			$table->integer('low_limit');
			$table->boolean('is_feature')->default(0);
			$table->string('products_slug');
			$table->integer('products_min_order')->default(1);
			$table->integer('products_max_stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
