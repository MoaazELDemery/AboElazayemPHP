<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyatTafsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayat_tafser', function (Blueprint $table) {
            $table->id();
            $table->integer('ayat_id');
            $table->integer('tafser_id');
            

            // $table->bigInteger('aya_id')->unsigned();
            // $table->foreign('aya_id')->references('id')->on('ayats')->onDelete('cascade');
            // $table->bigInteger('tafser_id')->unsigned();
            // $table->foreign('tafser_id')->references('id')->on('tafsers')->onDelete('cascade');
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
        Schema::dropIfExists('ayat_tafsers');
    }
}
