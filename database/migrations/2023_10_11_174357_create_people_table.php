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
        Schema::create('t_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('name',100);
            $table->string('firstname',50);
            $table->string('lastname',50)->nullable();
            $table->tinyInteger('document_type')->default(9)->unsigned();
            $table->string('document_number',20)->nullable();
            $table->string('address',200)->nullable();
            $table->string('city',100)->nullable();
            $table->string('ubigeo_peru',10)->nullable();
            $table->string('mobile',20)->unique()->nullable();
            $table->string('email')->unique();
            $table->string('gender',10)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('avatar')->nullable()->default('img/default-avatar.jpg');
            $table->tinyInteger('status')->default(1)->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_people');
    }
};
