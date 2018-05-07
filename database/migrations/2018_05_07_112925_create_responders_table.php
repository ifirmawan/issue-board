<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_id')->unsigned()->nullable();
            $table->integer('ditangani_oleh')->unsigned()->nullable();
            $table->text('penanganan')->nullable();
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
        Schema::dropIfExists('responders');
    }
}
