<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetPostalcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('set_postalcodes', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('code', 10);
    		$table->string('name', 100);
    		$table->uuid('country_id')->nullable();
    		$table->foreign('country_id')->references('id')->on('set_countries');
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
    	Schema::dropIfExists('set_postalcodes');
    }
}
