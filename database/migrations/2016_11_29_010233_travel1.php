<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Travel1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel1', function(Blueprint $table){
            $table->increments('id');
            $table->string('o_name');
            $table->string('o_city');
            $table->string('o_country');
            $table->float('o_bprice');
            $table->string('o_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('travel1');
    }
}
