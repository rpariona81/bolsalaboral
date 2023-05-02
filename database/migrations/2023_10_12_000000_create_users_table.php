<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('t_people')->onDelete('cascade');
            //$table->integer('role_id')->nullable();
            //https://mazer.dev/en/laravel/troubleshooting/laravel-migration-foreign-key-incorrectly-formed/#:~:text=Sometimes%20when%20running%20a%20Laravel,key%20column%20on%20source%20table.
            $table->unsignedInteger('role_id')->nullable();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('ip_address',45)->nullable();
            $table->timestamp('logged_in_at')->nullable();
            $table->timestamp('logged_out_at')->nullable();
            $table->string('api_token')->nullable();

            $table->foreign('role_id')->references('id')->on('t_roles');

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
        Schema::dropIfExists('t_users');
    }
};
