<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // company_base Database Table Create
        Schema::create('company_base' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();
            $table->string('cate_cd' , 16)->index();

            // 업체명 , 주소 , 연락처 , GPS , 가상번호
            $table->string('cp_name' , 127);
            $table->char('cp_post_cd' , 10);
            $table->char('cp_new_post_cd' , 12);
            $table->string('cp_addr_base' , 255)->nullable();
            $table->string('cp_addr_detail' , 500)->nullable();
            $table->string('cp_phone' , 255)->nullable();
            $table->decimal('cp_gps_lat', 11, 7)->nullable();
            $table->decimal('cp_gps_lng', 11, 7)->nullable();
            $table->char('cp_vphone', 12)->nullable();

            $table->enum('comment_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->enum('use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

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
        // company_base Database Table Drpp
        Schema::dropIfExists('company_base');
    }
}
