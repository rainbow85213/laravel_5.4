<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // user_point Database Table Create
        Schema::create('user_point' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('point_relation_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();

            $table->integer('point_type')->index();
            $table->integer('point');
            $table->integer('prev_point');
            $table->integer('next_point');
            $table->string('point_comment' , 500);

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // user_point Database Table Drpp
        Schema::dropIfExists('user_point');
    }
}
