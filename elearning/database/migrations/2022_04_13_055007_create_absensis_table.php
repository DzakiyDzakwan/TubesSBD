<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->bigInteger('absensi_id')->primary();
            $table->enum('status', ['aktif', 'tidak_aktif']);
            $table->timestamp('waktu_absensi', $precision=0);
            $table->char('mahasiswa_id', 9);
            $table->foreign('mahasiswa_id')->references('NIM')->on('mahasiswas');
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
        Schema::dropIfExists('absensis');
    }
}
