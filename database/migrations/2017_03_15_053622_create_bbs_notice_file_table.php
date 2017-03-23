<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsNoticeFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // bbs_notice Database Table Create
        Schema::create('bbs_notice_file' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('bbs_notice_file_sort');
            $table->integer('bbs_notice_id')->unsigned()->index();

            $table->string('bbs_notice_file_name' , 255);
            $table->string('bbs_notice_file_type' , 127);

            $table->integer('bbs_notice_file_size')->unsigned();
            $table->string('bbs_notice_file_rename' , 255);
            $table->string('bbs_notice_file_url' , 500);

            $table->enum('bbs_notice_file_use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

            $table->timestamps();

            $table->foreign('bbs_notice_id')
                ->references('id')->on('bbs_notice')
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
        // bbs_notice Database Table Drpp
        Schema::dropIfExists('bbs_notice_file');
    }
}
