<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_proses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proses_id');
            $table->string('nama_sub')->nullable();
            $table->timestamps();

            $table->foreign('proses_id')
                ->references('id')
                ->on('proses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_proses');
    }
}
