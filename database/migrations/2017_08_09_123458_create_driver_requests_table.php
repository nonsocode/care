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
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->integer('lga_id')->nullable();
            $table->string('job_description')->nullable();
            $table->integer('driver_type_id')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('start_date')->nullable();
            $table->string('frequency')->nullable();
            $table->string('pay')->nullable();
            $table->string('call_time')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('driver_requests');
    }
}
