<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('ar_targetfiles', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->uuid('target_id');
    		$table->foreign('target_id')->references('id')->on('ar_targets');
    		$table->string('filename', 255);
    		$table->string('filetype', 5);
    		$table->integer('size');
    		$table->string('mimetype', 100);
    		$table->timestamps();
    	});
    	DB::statement("ALTER TABLE ar_targetfiles ADD data LONGBLOB not null");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('ar_targetfiles');
    }
}
