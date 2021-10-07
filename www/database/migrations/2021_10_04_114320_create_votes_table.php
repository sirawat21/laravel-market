<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('reviews_id')->unsigned();
            $table->foreign('reviews_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
