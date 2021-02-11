<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep_actions', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->decimal('amount_steal', $precision = 11, $scale = 2);
            $table->decimal('amount_wasted', $precision = 11, $scale = 2);
            $table->longText('detail');
            $table->longText('more_info');        // url related with the the action saved in json text format
            $table->date('date_happened');
            
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
        Schema::dropIfExists('pep_actions');
    }
}
