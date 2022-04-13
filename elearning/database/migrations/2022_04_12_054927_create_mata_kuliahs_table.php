<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->char('kode_mata_kuliah', 6)->primary();
            $table->string('nama_matkul', 200);
            $table->integer('sks')->unsigned();
            $table->date('created_at');
            $table->char('jurusan', 9);
            $table->foreign('jurusan')->references('kode_jurusan')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliahs');
    }
}
