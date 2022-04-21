<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// kalo bingung sama tipe2nya bisa liat di
// https://laravel.com/docs/9.x/migrations#available-column-types

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->char('NIK')->unique();
            $table->string('email', 200)->unique();
            $table->string('password');
            $table->string('first_name', 200);
            $table->string('last_name', 200);
            $table->string('name');
            $table->enum('jenis_kelamin',['laki2', 'perempuan']);
            $table->string('agama', 100);
            $table->enum('kewarganegaraan', ['indonesia', 'luar_negeri']);
            $table->char('nomor_hp', 12);
            $table->date('tanggal_lahir');
            $table->text('alamat_domisili');
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
        Schema::dropIfExists('users');
    }
}
