<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drift_id')->nullable();
            $table->foreign('drift_id')->references('id')->on('thrifts');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');

            $table->decimal('contribution', 15, 2)->nullable()->default(0.0);
            $table->decimal('balance', 15, 2)->nullable()->default(0.0);
            $table->enum('status', ['current', 'completed'])->default('current');
            $table->Text('description')->nullable();

            $table->timestamp('date_started')->nullable();
            $table->timestamp('date_completed')->nullable();
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
        Schema::dropIfExists('savings');
    }
}
