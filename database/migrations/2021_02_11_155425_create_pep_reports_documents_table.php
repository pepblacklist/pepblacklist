<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepReportsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_reports_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reports');
            $table->string('file_name');
            $table->foreign('id_reports')->references('id')->on('pep_reports');
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
        Schema::dropIfExists('pep_reports_documents');
    }
}
