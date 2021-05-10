<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studentlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')) {
           Schema::create('students',function(Blueprint $table){
               $table->bigIncrements('id');
               $table->char('name',60);
               $table->integer('class');
               $table->char('email',255);
               $table->text('description')->nullable();
               $table->timestamp('created_at');
               $table->dateTime('updated_at')->nullable();
           }); 
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
