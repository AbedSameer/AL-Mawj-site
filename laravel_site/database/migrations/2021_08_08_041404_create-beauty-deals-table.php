<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeautyDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BeautyDeals', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('description');
            $table->string('note');
            $table->string('img_link');
            $table->double('prise');
            $table->date('exc-date');
            $table->string('special_text');
            $table->string('sales');
            $table->string('type');


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
