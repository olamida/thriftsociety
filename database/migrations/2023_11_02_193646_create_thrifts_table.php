<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThriftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thrifts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('closed_by')->nullable();
            $table->foreign('closed_by')->references('id')->on('users');
            $table->unsignedBigInteger('suspended_by')->nullable();
            $table->foreign('suspended_by')->references('id')->on('users');
            $table->unsignedBigInteger('reopened_by')->nullable();
            $table->foreign('reopened_by')->references('id')->on('users');

            $table->integer('staff_id')->nullable();
            $table->string('fname');
            $table->string('midname')->default('-');
            $table->string('lname');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'suspended', 'closed'])->default('active');
            $table->timestamp('date_suspended')->nullable();
            $table->timestamp('date_closed')->nullable();
            $table->timestamp('reopen_at')->nullable();
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
        Schema::dropIfExists('thrifts');
    }
}
