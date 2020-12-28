<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_students', function (Blueprint $table) {
            $table->uuid("id");
            $table->string('nim')->unique();
            $table->integer('nik')->unique();
            $table->integer('nisn')->unique();
            $table->string('npwp')->unique();
            $table->string('name');
            $table->unsignedBigInteger('birth_place_id');
            $table->date('birth_date_id');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->unsignedBigInteger('religion_id');
            $table->string('country');
            $table->string('alat_transportasi');
            $table->integer('telephone');
            $table->string('email');
            $table->string('kps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_students');
    }
}
