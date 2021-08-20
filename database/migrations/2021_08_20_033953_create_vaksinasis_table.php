<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksinasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vaksinator_id')->nullable();
            $table->unsignedBigInteger('jenis_vaksin_id')->nullable();
            $table->date('daftar_mulai');
            $table->date('daftar_selesai');
            $table->date('tgl_pelaksanaan');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('lokasi');
            $table->integer('kuota');
            $table->timestamps();
            $table->foreign('vaksinator_id')->references('id')->on('vaksinators');
            $table->foreign('jenis_vaksin_id')->references('id')->on('jenis_vaksins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vaksinasis', function (Blueprint $table) {
            $table->dropForeign(['vaksinator_id']);
            $table->dropForeign(['jenis_vaksin_id']);
        });
        Schema::dropIfExists('vaksinasis');
    }
}
