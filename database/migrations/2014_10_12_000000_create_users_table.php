<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('email' , 255)->unique();
            $table->string('email_id' , 127);
            $table->string('email_addr' , 255);
            $table->string('name' , 127);
            $table->string('password');
            $table->char('user_hp' , 13)->nullable();
            $table->integer('point')->unsigned()->default(0);
            $table->integer('cash')->unsigned()->default(0);

            $table->enum('use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

            $table->rememberToken();
            $table->timestamps();

            $table->index([ 'email_id' , 'email_addr' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
