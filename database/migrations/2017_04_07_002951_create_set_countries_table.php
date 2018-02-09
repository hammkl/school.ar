<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('set_countries', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('code', 10);
    		$table->string('name', 100);
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
    	Schema::dropIfExists('set_countries');
    }
}
