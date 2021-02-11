<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepEntityActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_entity_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_entity');
            $table->unsignedBigInteger('id_action');
            $table->foreign('id_entity')->references('id')->on('pep_entities');
            $table->foreign('id_action')->references('id')->on('pep_actions');
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
        Schema::dropIfExists('pep_entity_actions');
    }
}
