<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estadio' , 255)->default(' ');
            $table->text('tratamiento');
            
            $table->string('t1' , 1)->default('0');
            
            $table->string('t1a' , 1)->default('0');
            $table->string('t1b' , 1)->default('0');
            
            $table->string('t2' , 1)->default('0');
            $table->string('t3' , 1)->default('0');
            $table->string('t4a' , 1)->default('0');
            $table->string('t4' , 1)->default('0');
            $table->string('t4b' , 1)->default('0');
            // cualquier x 
            $table->string('t_x' , 1)->default('0');

            $table->string('nx' , 1)->default('0');
            $table->string('n0' , 1)->default('0');
            $table->string('n1' , 1)->default('0');
            $table->string('n2a' , 1)->default('0');
            $table->string('n2' , 1)->default('0');
            $table->string('n2b' , 1)->default('0');
            $table->string('n2c' , 1)->default('0');
            $table->string('n3a' , 1)->default('0');
            $table->string('n3b' , 1)->default('0');
            $table->string('n3' , 1)->default('0');
            // cualquier n 
            $table->string('n_x' , 1)->default('0');

            $table->string('mx' , 1)->default('0');
            $table->string('m0' , 1)->default('0');
            $table->string('m1' , 1)->default('0');
            // cualquier m
            $table->string('m_x' , 1)->default('0');


            $table->string('status' , 1)->default('1');
            
            $table->string('subcategories_id' , 255)->default('0');
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
        Schema::dropIfExists('result');
    }
}
