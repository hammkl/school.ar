<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 80);
            $table->boolean('active')->default(0);
            $table->boolean('isAdmin')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('set_users');
    }
}
