<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('from')->comment('句子出处');
            $table->string('author')->comment('句子原作者');
            $table->text('content')->comment('句子内容');
            $table->integer('user_id')->unsigned()->comment('发布者id');
            $table->tinyInteger('checked')->default(0)->comment('审核标志');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passages');
    }
}
