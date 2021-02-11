<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepActionsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_actions_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_actions');
            $table->string('file_name');
            $table->foreign('id_actions')->references('id')->on('pep_actions');
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
        Schema::dropIfExists('pep_actions_documents');
    }
}
