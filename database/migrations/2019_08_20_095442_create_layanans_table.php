<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('paket_id')->unsigned()->index();
            $table->bigInteger('produk_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('paket_id')
                    ->unsigned()
                    ->references('id')
                    ->on('pakets')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('produk_id')
                    ->unsigned()
                    ->references('id')
                    ->on('produks')
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
        Schema::dropIfExists('layanans');
    }
}
