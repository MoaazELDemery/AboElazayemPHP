<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoemRawiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poem_rawies', function (Blueprint $table) {
            $table->id();
            $table->text('right_ar');
            $table->text('right_en');
            $table->text('left_ar');
            $table->text('left_en');
            $table->bigInteger('poem_id')->unsigned();
            $table->foreign('poem_id')->references('id')->on('poems')->onDelete('cascade');
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
        Schema::dropIfExists('poem_rawies');
    }
}
