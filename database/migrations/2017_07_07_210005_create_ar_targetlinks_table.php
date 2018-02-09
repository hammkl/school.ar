<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArTargetlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('ar_targetlinks', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->string('link', 8000);
    		$table->string('description', 8000);
    		$table->uuid('target_id');
    		$table->foreign('target_id')->references('id')->on('ar_targets');
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
        //
    	Schema::dropIfExists('ar_targetlinks');
    }
}
