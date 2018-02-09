<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('set_users', function (Blueprint $table) {
    		$table->uuid('professor_id')->nullable()->after('password');
    		$table->foreign('professor_id')->references('id')->on('set_users');
    		$table->boolean('isProfessor')->default(0)->after('active');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('set_users', function (Blueprint $table) {
    		$table->dropColumn('isProfessor');
    		$table->dropForeign(['professor_id']);
    		$table->dropColumn('professor_id');
    	});
    }
}
