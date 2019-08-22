<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('layanan_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('metode_pembayaran_id')->unsigned()->index();
            $table->bigInteger('status_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('layanan_id')
                    ->references('id')
                    ->on('layanans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('metode_pembayaran_id')
                    ->references('id')
                    ->on('metode_pembayarans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')
                    ->onUpdate('cascade')
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
        Schema::dropIfExists('transaksis');
    }
}
