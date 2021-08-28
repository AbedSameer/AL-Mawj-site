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
            $table->string('excerpt');
            $table->string('img');
            $table->date('exc-date');
            $table->double('prise');
            $table->string('decription');
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
