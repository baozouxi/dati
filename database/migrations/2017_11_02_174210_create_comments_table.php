<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //评论功能是个坑  后续客户可能需要增加审核功能
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('content')->comment('评论内容');
            $table->integer('user_id')->comment('用户ID');
            $table->integer('passage_id')->comment('句子id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
