<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->bigInteger('materi_id')->unsigned()->primary();
            $table->string('nama_materi', 200);
            $table->text('deskripsi');
            $table->bigInteger('pertemuan')->unsigned();
            $table->foreign('pertemuan')->references('pertemuan_id')->on('pertemuans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materis');
    }
}
