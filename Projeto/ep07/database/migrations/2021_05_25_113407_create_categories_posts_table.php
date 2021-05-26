<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCategory');
            $table->unsignedBigInteger('idPost');
            $table->timestamps();

            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('idPost')->references('id')->on('posts')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_posts');
    }
}
