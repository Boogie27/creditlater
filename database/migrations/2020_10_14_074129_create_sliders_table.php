<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id("id");
            $table->string("slider_name");
            $table->string("slider_image");
            $table->string("header_one");
            $table->string("header_two");
            $table->string("header_three");
            $table->dateTime("date_added")->nullable();
            $table->dateTime("last_modified")->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
