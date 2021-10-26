<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BlogPosts', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('exrept');
            $table->string('contant');
            $table->integer('views');
            $table->date('exc-date');
            $table->string('img_url');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
