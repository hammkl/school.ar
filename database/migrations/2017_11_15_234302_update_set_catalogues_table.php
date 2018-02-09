<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSetCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('set_catalogues', function (Blueprint $table) {
    		$table->uuid('professor_id')->nullable();
    		$table->foreign('professor_id')->references('id')->on('set_users');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('set_catalogues', function (Blueprint $table) {
    		$table->dropForeign(['professor_id']);
    		$table->dropColumn('professor_id');
    	});
    }
}
