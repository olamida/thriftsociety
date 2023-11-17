<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drift_id')->nullable();
            $table->foreign('drift_id')->references('id')->on('thrifts');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->foreign('approved_by')->references('id')->on('users');

            $table->decimal('amount', 15, 2)->nullable()->default(0.0);
            $table->decimal('charges', 8, 2)->nullable()->default(0.0);
            $table->decimal('repayed', 15, 2)->nullable()->default(0.0);
            $table->enum('status', ['submitted','approved', 'ongoing', 'completed'])->default('submitted');
            $table->mediumText('description')->nullable();

            $table->timestamp('date_disbursed')->nullable();
            $table->date('repay_due')->nullable();
            $table->timestamp('last_paid')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
