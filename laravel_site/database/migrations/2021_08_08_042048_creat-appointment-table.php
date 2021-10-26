<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Appointment', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('cli_id');
           /* $table->string('cli_name');
            $table->integer('cli_phone');
            $table->string('cli_type');
            $table->string('cli_email');*/
            $table->dateTime('opration_date');
            $table->dateTime('appointment_date');
            $table->string('departmint');
            $table->string('serves');
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
