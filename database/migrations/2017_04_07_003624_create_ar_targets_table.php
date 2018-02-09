<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('ar_targets', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('name', 255);
    		$table->uuid('catalogue_id');
    		$table->foreign('catalogue_id')->references('id')->on('set_catalogues');
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
    	Schema::dropIfExists('ar_targets');
    }
}
