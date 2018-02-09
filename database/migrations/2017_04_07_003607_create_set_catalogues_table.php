<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('set_catalogues', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('name', 100);
    		$table->uuid('publisher_id');
    		$table->foreign('publisher_id')->references('id')->on('set_publishers');
    		$table->uuid('cataloguetype_id');
    		$table->foreign('cataloguetype_id')->references('id')->on('set_cataloguetypes');
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
    	Schema::dropIfExists('set_catalogues');
    }
}
