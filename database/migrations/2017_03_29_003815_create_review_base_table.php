<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // review_base Database Table Create
        Schema::create('review_base' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('sort')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('cate_cd' , 16)->index();

            // TODO 업체 정보는 따로 피벗 테이블 사용
            // TODO CKEditor.
            // 제목 , 내용 , 평점 , 작성자 ,
            $table->string('r_title' , 127);
            $table->text('r_content')->nullable();
            $table->integer('r_star')->nullable();

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
        // review_base Database Table Drpp
        Schema::dropIfExists('review_base');
    }
}
