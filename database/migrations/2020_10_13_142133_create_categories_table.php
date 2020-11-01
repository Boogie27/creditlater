<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id("id");
            $table->string("category_name");
            $table->string('category_banner_image')->nullable();
            $table->text('category_image')->nullable();
            $table->text('round_cat_image')->nullable();
            $table->text('category_icon');
            $table->integer('parent_id')->default(0);
            $table->integer('sort_order')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->dateTime('last_modified')->nullable();
            $table->boolean('category_status')->default(1);
            $table->boolean("is_feature");
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
        Schema::dropIfExists('categories');
    }
}
