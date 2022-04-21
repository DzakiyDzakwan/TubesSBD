<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->char('NIP', 9)->primary();
            $table->char('NIDN', 9)->unique();
            $table->date('tanggal_terdaftar');
            $table->string('pendidikan_terakhir', 100);
            $table->enum('status_keaktifan', ['aktif', 'tidak_aktif']);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamp('created_at', $precision = 0);
            $table->timestamp('updated_at', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
