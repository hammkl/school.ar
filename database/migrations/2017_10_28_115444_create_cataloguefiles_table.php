<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCataloguefilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('set_cataloguefiles', function (Blueprint $table) {
    		$table->uuid('id');
    		$table->primary('id');
    		$table->uuid('catalogue_id');
    		$table->foreign('catalogue_id')->references('id')->on('set_catalogues');
    		$table->string('filename', 255);
    		$table->integer('size');
    		$table->string('mimetype', 100);
    		$table->timestamps();
    	});
    	DB::statement("ALTER TABLE set_cataloguefiles ADD data LONGBLOB not null");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('set_cataloguefiles');
    }
}
