<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('daftar_sub_id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->timestamps();

            $table->foreign('daftar_sub_id')
                ->references('id')
                ->on('daftar_subs')
                ->onDelete('cascade');

            // $table->foreign('pertanyaan_id')
            //     ->references('id')
            //     ->on('pertanyaans')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaians');
    }
}
