<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->foreign('fk_sleep_temp')->references('id')->on('sleeptemp')->onDelete('cascade');
        });

        Schema::table('users', function(Blueprint $table){
            $table->foreign('fk_job')->references('id')->on('jobs')->onDelete('cascade');
        });

        Schema::table('bills', function(Blueprint $table){
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('bills', function(Blueprint $table){
            $table->foreign('fk_billtype')->references('id')->on('billtype')->onDelete('cascade');
        });

        Schema::table('meals', function(Blueprint $table){
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('meals', function(Blueprint $table){
            $table->foreign('fk_mealtypes')->references('id')->on('mealtypes')->onDelete('cascade');
        });

        Schema::table('mealtypes', function(Blueprint $table){
            $table->foreign('fk_cooktime')->references('id')->on('cooktimes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fks');
    }
}
