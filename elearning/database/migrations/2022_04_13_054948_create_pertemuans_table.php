<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertemuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuans', function (Blueprint $table) {
            $table->bigInteger('pertemuan_id')->primary()->unsigned();
            $table->string('nama_pertemuan', 200);
            $table->text('deskripsi');
            $table->date('tanggal_pertemuan');
            $table->char('kelas', 6);
            $table->foreign('kelas')->references('kelas_id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertemuans');
    }
}
