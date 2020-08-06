<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 100);
            $table->string('divisi', 100);
            $table->integer('divisi_id')->unsigned();
            $table->foreign('divisi_id')
                ->references('id')->on('tbl_divisi')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('username', 100);
            $table->string('password');
            $table->string('foto')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('user');
    }
}
