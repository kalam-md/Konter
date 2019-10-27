<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyings', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('supplier');
            $table->integer('quantity');
            $table->integer('total_quantity');
            $table->integer('price');
            $table->integer('total_price');
            $table->integer('voucher_id')->nullable();
            $table->integer('perdana_id')->nullable();
            $table->integer('aksesoris_id')->nullable();
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
        Schema::dropIfExists('buyings');
    }
}
