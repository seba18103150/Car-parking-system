<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingVehicalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_vehicales', function (Blueprint $table) {
            $table->id();
            $table->integer('vehical_type_id');
            $table->dateTime('Entry_time');
            $table->integer('car_number');
            $table->integer('driver_phone_number');
            $table->integer('Slot_number_Id');
            $table->string('parking')->nullable();
            $table->datetime('In')->nullable();
            $table->datetime('out')->nullable();
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
        Schema::dropIfExists('parking_vehicales');
    }
}
