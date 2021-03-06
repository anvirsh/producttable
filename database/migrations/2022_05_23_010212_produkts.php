<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produkts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products', function (Blueprint $table) {
		  $table->increments('id'); // или  $table->bigIncrements('id');
		  $table->string('article')->unique();
		  $table->string('name');
		  $table->string('status');
		  $table->jsonb('data')->default('{}');
		  $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
