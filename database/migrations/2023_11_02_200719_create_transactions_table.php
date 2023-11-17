<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drift_id')->nullable();
            $table->foreign('drift_id')->references('id')->on('thrifts');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->unsignedBigInteger('trans_type')->nullable();
            $table->foreign('trans_type')->references('id')->on('transaction_types');


            $table->decimal('amount', 15, 2);
            //$table->enum('type', ['contribution', 'withdrawal', 'repay'])->default('contribution');
            $table->enum('method', ['cash', 'transfer', 'card', 'cheque']);
            $table->string('image')->nullable();
            $table->mediumText('naration')->nullable();

            $table->timestamp('date_paid')->nullable();
            //makes create_at and updated_at columns
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
        Schema::dropIfExists('transactions');
    }
}
