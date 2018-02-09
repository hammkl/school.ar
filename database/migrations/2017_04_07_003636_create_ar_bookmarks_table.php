<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('ar_bookmarks', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->uuid('target_id');
    		$table->foreign('target_id')->references('id')->on('ar_targets');
    		$table->uuid('user_id');
    		$table->foreign('user_id')->references('id')->on('set_users');
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
    	Schema::dropIfExists('ar_bookmarks');
    }
}
