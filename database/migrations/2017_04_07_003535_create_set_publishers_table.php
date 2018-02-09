<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetPublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('set_publishers', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('short_name', 35);
    		$table->string('long_name', 255);
    		$table->string('email', 50)->unique();
    		$table->string('password', 80);
    		$table->string('vatid', 10);
    		$table->string('companyid', 15);
    		$table->boolean('active');
    		$table->uuid('postalcode_id');
    		$table->foreign('postalcode_id')->references('id')->on('set_postalcodes');
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
    	Schema::dropIfExists('set_publishers');
    }
}
