<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mapel', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('hari');
            $table->string('a')->default('0');
            $table->string('b')->default('0');
            $table->string('c')->default('0');
            $table->string('d')->default('0');
            $table->string('e')->default('0');
            $table->string('f')->default('0');
            $table->string('g')->default('0');
            $table->string('h')->default('0');
            $table->string('i')->default('0');
            $table->string('j')->default('0');
            $table->string('k')->default('0');
            $table->string('l')->default('0');
            $table->string('m')->default('0');
        });
        
        Schema::create('Data',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('Code');
            $table->string('Pelajaran');
            $table->string('guru');
         });
     }
         
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('Mapel');
         Schema::drop('Data');
     }
 }
 
