<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poems', function (Blueprint $table) {
            $table->id();
            $table->string('pname_ar');
            $table->string('pname_en');
            $table->Integer('num_peom');
            $table->text('occasion_ar');
            $table->text('occasion_en');
            $table->text('Place_ar');
            $table->text('Place_en');
            $table->date('date_birth');
            $table->date('date_hijri');
            $table->Integer('num_verses');
            $table->bigInteger('rawy_id')->unsigned();
            $table->foreign('rawy_id')->references('id')->on('rawies')->onDelete('cascade');
            $table->bigInteger('sea_id')->unsigned();
            $table->foreign('sea_id')->references('id')->on('seas')->onDelete('cascade');
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
        Schema::dropIfExists('poems');
    }
}
