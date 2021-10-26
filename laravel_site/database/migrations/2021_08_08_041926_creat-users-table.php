<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email');
            $table->integer('phone');
            $table->date('BOD');
            $table->string('nation');
            $table->string('contre');
            $table->string('ID_number');
            $table->string('type');
            $table->string('address');

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
