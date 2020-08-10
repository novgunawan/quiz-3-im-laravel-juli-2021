<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKaryawanidToProyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('karyawanid');
            $table->foreign('karyawanid')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyek', function (Blueprint $table) {
            //
        });
    }
}
