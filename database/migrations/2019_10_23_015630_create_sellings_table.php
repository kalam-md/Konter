<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellings', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->integer('quantity');
            $table->integer('total_quantity');
            $table->integer('total_price');
            $table->integer('karyawan_id')->unsigned()->nullable();
            $table->integer('perdana_id')->unsigned()->nullable();
            $table->integer('voucher_id')->unsigned()->nullable();
            $table->integer('aksesoris_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('sellings', function($table) {
            $table->foreign('karyawan_id')
            ->references('id')
            ->on('karyawans')
            ->onDelete('cascade');

            $table->foreign('perdana_id')
            ->references('id')
            ->on('perdana_cards')
            ->onDelete('cascade');

            $table->foreign('voucher_id')
            ->references('id')
            ->on('vouchers')
            ->onDelete('cascade');

            $table->foreign('aksesoris_id')
            ->references('id')
            ->on('aksesoris')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellings');
    }
}
