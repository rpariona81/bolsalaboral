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
        //
        Schema::create('t_menu_role', function (Blueprint $table) {
            $table->increments('id');
            //$table->biginteger('role_id')->unsigned();
            //$table->biginteger('user_id')->unsigned();
            $table->integer('menu_id')->unsigned();//->index();
            $table->integer('role_id')->unsigned();//->index();
            
            $table->foreign('menu_id')->references('id')->on('t_menus');
            
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
        //
        Schema::dropIfExists('t_menu_role');
    }
};
