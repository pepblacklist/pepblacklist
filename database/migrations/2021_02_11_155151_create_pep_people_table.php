<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_entities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_political_party');
            $table->string('name');
            $table->string('lastname');
            $table->string('identity');
            $table->string('image');
            $table->integer('pep_type');                // personal, business or anonymous society   
            $table->integer('status');
            $table->string('job_position');             // job position if aplay
            $table->foreign('id_political_party')->references('id')->on('pep_political_parties');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pep_entities');
    }
}
