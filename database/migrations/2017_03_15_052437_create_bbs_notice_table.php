<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // bbs_notice Database Table Create
        Schema::create('bbs_notice' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('bbs_notice_sort');
            $table->char('bbs_notice_type' , 2)->index();
            $table->integer('bbs_notice_writer_id')->unsigned()->index();

            $table->string('bbs_notice_title' , 127);
            $table->text('bbs_notice_content');

            $table->enum('bbs_notice_push_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->enum('bbs_notice_use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

            $table->timestamps();

            $table->foreign('bbs_notice_writer_id')
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
        // bbs_notice Database Table Drpp
        Schema::dropIfExists('bbs_notice');
    }
}
