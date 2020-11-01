<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('total');
            $table->string('small');
            $table->string('medium');
            $table->string('large');
            $table->string('xtra_large');
            $table->string('unspecified');
            $table->dateTime('date_added')->default(Carbon::now()->toDateTimeString());
            $table->dateTime('date_modified')->default(Carbon::now()->toDateTimeString());
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
        Schema::dropIfExists('wishlists');
    }
}
