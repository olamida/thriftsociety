<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drift_id');
            $table->foreign('drift_id')->references('id')->on('thrifts');
            //Address types: permanent, current, next-of-kin
            //$table->enum('address_type', ['permanent', 'current', 'next-of-kin']);
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('address_types');
            $table->string('house_no');
            $table->string('street_line1');
	        $table->string('street_line2')->nullable();
            $table->string('landmark')->nullable();
            $table->string('district')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('lga_id');
	        $table->unsignedBigInteger('state_id');

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
        Schema::dropIfExists('addresses');
    }
}
