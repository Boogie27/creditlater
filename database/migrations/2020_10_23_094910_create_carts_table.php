<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id("id");
            $table->integer("user_id");
            $table->integer("product_id");
            $table->string("size")->nullable();
            $table->integer("price");
            $table->integer("quantity")->default(1);
            $table->integer("total");
            $table->dateTime('date_added');
            $table->dateTime('date_modified');
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
        Schema::dropIfExists('carts');
    }
}
