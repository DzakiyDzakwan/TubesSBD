<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('NIM', 9)->primary();
            $table->char('NISN')->unique;
            $table->char('semester', 2);
            $table->char('program');
            $table->timestamp('tanggal_terdaftar', $precision = 0);
            $table->year('angkatan');
            $table->enum('status_keaktifan', ['aktif', 'tidak_aktif']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->char('jurusan');
            $table->foreign('jurusan')->references('kode_jurusan')->on('jurusans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
