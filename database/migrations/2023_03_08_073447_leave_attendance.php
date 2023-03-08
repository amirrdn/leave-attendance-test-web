<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeaveAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_attendence', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->bigInteger('leave_type')->unsigned()->index()->nullable();
            $table->foreign('leave_type')->references('id')->on('leave_type')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        //
    }
}
