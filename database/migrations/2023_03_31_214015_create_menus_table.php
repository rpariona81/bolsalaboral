<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('t_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu', 45)->nullable();
            $table->string('controller', 45)->nullable();
            $table->string('action', 45)->nullable();
            $table->string('url', 100)->nullable();
            $table->bigInteger('icon_id')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('visible')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
        });

        DB::table('t_menus')->insert(array('menu' => 'Inicio', 'url' => 'home'));
        DB::table('t_menus')->insert(array('menu' => 'Menus', 'url' => 'menus.index'));
        DB::table('t_menus')->insert(array('menu' => 'Roles', 'url' => 'roles.index'));
        DB::table('t_menus')->insert(array('menu' => 'Usuarios', 'url' => 'users.index'));
        DB::table('t_menus')->insert(array('menu' => 'Accesos', 'url' => 'accesos.index'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_menus');
    }
};
