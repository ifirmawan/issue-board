<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('diterima_oleh')->unsigned()->nullable();
            $table->integer('pelapor')->unsigned();
            $table->string('no_laporan')->nullable();
            $table->dateTime('waktu_laporan')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('prioritas',['low','medium','high'])->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->integer('periode')->nullable();
            $table->string('durasi_penanganan')->nullable();
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
        Schema::dropIfExists('issues');
    }
}
