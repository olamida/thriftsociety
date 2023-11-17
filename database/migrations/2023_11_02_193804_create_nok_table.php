<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('drift_id');
            $table->foreign('drift_id')->references('id')->on('thrifts');
            $table->string('fname');
            $table->string('midname')->nullable();
            $table->string('lname');
            $table->enum('type', ['spouse', 'child', 'relative', 'acquintance'])->default('spouse');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->Text('description')->nullable();
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
        Schema::dropIfExists('nok');
    }
}
