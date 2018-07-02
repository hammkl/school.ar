<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfigurationToArTargetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('ar_targets', function (Blueprint $table) {
    		$table->text('configuration')->default(null)->after('name');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('ar_targets', function (Blueprint $table) {
    		$table->dropColumn('configuration');
    	});
    }
}
