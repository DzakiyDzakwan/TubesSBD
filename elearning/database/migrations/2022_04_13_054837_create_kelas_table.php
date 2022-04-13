<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->char('kelas_id', 6)->primary();
            $table->char('dosen', 9);
            $table->foreign('dosen')->references('NIP')->on('dosens');
            $table->char('mata_kuliah', 6);
            $table->foreign('mata_kuliah')->references('kode_mata_kuliah')->on('mata_kuliahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
