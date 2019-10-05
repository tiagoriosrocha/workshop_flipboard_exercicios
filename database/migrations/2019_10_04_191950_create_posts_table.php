<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('journal_id');
            $table->text('title')->nullable();
            $table->longText('content');
            $table->integer('status')->default(1);
            $table->integer('visibility')->default(0);
            $table->timestamps();
        });

        Schema::table('posts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('journal_id')->references('id')->on('journals');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
