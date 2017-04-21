<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // file_info Database Table Create
        Schema::create('file_info' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('file_sort');
            // P = public(사용자까지 봐도 되는 파일)
            // V = private(직원용으로만 쓰는 파일)
            // N = naver(임직원용 파일)
            $table->enum('use_type' , ['P' , 'V' , 'N'])->default('P')->index();
            $table->integer('file_relation_id');

            $table->string('file_name' , 255);
            $table->string('file_type' , 127);

            $table->integer('file_size')->unsigned();
            $table->string('file_rename' , 255);
            $table->string('file_url' , 500);

            $table->enum('file_use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

            $table->timestamps();

//            $table->foreign('bbs_notice_id')
//                ->references('id')->on('bbs_notice')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // file_info Database Table Drpp
        Schema::dropIfExists('file_info');
    }
}
