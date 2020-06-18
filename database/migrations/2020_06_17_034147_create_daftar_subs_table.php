<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_subs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sub_proses_id');
            $table->string('nama_daftar')->nullable();
            $table->timestamps();

            $table->foreign('sub_proses_id')
                ->references('id')
                ->on('sub_proses')
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
        Schema::dropIfExists('daftar_subs');
    }
}
