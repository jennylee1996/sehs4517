<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolledActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_activities', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('activity_id')->unsigned();
            $table->date('enroll_date');
            $table->char('enroll_status');
            $table->primary(['user_id', 'activity_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('activity_id')->references('id')->on('activities');
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
        Schema::dropIfExists('enrolled_activities');
    }
}
