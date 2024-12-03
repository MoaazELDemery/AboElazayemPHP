<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTafsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tafsers', function (Blueprint $table) {
            $table->id();
            $table->text('tafser_ar');
            $table->text('tafser_en');
            $table->bigInteger('imam_id')->unsigned();
            $table->foreign('imam_id')->references('id')->on('imams')->onDelete('cascade');
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
        Schema::dropIfExists('tafsers');
    }
}
