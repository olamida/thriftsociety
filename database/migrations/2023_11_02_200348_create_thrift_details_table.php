<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThriftDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thrift_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drift_id');
            $table->foreign('drift_id')->references('id')->on('thrifts');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');

            $table->date('birth_date')->nullable();
            $table->date('appoint_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('current_RTC')->nullable();
            $table->string('phone_number')->unique()->nullable();

            $table->longText('profile_summary')->nullable();
            $table->longText('notes')->nullable();

            //makes create_at and updated_at culumns
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thrift_details');
    }
}
