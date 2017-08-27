<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->integer('lga_id')->nullable();
            $table->string('job_description')->nullable();
            $table->integer('driver_type_id')->nullable();
            $table->timeTz('working_hours_start')->nullable();
            $table->timeTz('working_hours_end')->nullable();
            $table->string('start_date')->nullable();
            $table->string('frequency')->nullable();
            $table->string('pay')->nullable();
            $table->timeTz('call_time_from')->nullable();
            $table->timeTz('call_time_to')->nullable();
            $table->boolean('open')->default(true);
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('driver_requests', function($table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('driver_requests');
    }
}
