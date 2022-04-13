<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->bigInteger('tugas_id')->unsigned()->primary();
            $table->string('nama_tugas', 200);
            $table->text('deskripsi');
            $table->date('deadline_tugas');
            $table->bigInteger('materi')->unsigned();
            $table->foreign('materi')->references('materi_id')->on('materis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
}
