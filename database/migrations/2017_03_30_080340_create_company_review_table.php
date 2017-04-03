<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // company_review Database Table Create
        Schema::create('company_review' , function( Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('review_base_id')->unsigned()->index();
            $table->integer('company_base_id')->unsigned()->index();

            $table->enum('use_yn' , [ 'Y' , 'N' ])->default('Y');
            $table->softDeletes();

            $table->timestamps();

            $table->foreign('review_base_id')
                ->references('id')->on('review_base')
                ->onDelete('cascade');

            $table->foreign('company_base_id')
                ->references('id')->on('company_base')
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
        // company_review Database Table Drpp
        Schema::dropIfExists('company_review');
    }
}
