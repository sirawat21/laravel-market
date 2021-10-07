<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->primary('id')->increments();
            $table->string('name')->unique()->nullable(false);
            $table->text('description')->nullable(false);
            $table->float('price'->nullable(false));
            $table->string('origin_link')->nullable();
            $table->integer('manufacturers_id')->nullable(false)->unsigned();
            $table->foreign('manufacturers_id')->references('id')->on('manufacturers');
            $table->integer('users_id')->nullable(false)->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
