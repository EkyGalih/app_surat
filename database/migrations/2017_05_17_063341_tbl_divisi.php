<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDivisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_divisi', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_departemen');
            // $table->integer('distribusi_id')->unsigned();
            // $table->foreign('distribusi_id')
            //     ->references('id')->on('tbl_distribusi')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('tbl_divisi');
    }
}
