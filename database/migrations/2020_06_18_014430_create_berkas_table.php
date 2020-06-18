<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->text('prog_evaluasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('bukti')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();

            $table->foreign('pertanyaan_id')
                ->references('id')
                ->on('pertanyaans')
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
        Schema::dropIfExists('berkas');
    }
}
