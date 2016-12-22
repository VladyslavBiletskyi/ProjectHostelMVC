<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("username", 255);
            $table->string("email", 255)->unique();
            $table->string("faculty", 255)->nullable();
            $table->string("password", 255);
            $table->unsignedInteger("room_id")->default(0);
            $table->boolean("is_admin");
            $table->rememberToken();

            //$table->foreign("room_id")->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
