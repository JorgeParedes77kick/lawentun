<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient');
            $table->string('email_patient');
            $table->date('date');
            $table->bigInteger('id_user_therapy')->unsigned();
            $table->foreign('id_user_therapy')->references('id')->on('user_therapy')
                ->constrained('user_therapy')->onDelete('cascade');
            $table->bigInteger('id_user_schedule')->unsigned();
            $table->foreign('id_user_schedule')->references('id')->on('user_schedules')
                ->constrained('user_schedules')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
