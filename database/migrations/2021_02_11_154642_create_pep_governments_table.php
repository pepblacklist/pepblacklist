<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_governments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_politic_party');
            $table->string('president');
            $table->string('image');
            $table->date('date_init');
            $table->date('date_end');
            $table->foreign('id_politic_party')->references('id')->on('pep_politic_parties');
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
        Schema::dropIfExists('pep_governments');
    }
}
