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
        Schema::create('t_roles', function (Blueprint $table) {
            //https://laracasts.com/discuss/channels/laravel/how-to-make-a-primary-key-integer-not-be-incremental
            $table->increments('id');
            $table->string('rolename');
            $table->string('slug', 255)->nullable();
            $table->string('description')->nullable();
            $table->integer('level')->default(9);
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
        Schema::dropIfExists('t_roles');
    }
};
