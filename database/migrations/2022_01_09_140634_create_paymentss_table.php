<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentss', function (Blueprint $table) {
            $table->id();
            $table->integer('slot_price')->nullable();
            $table->integer('total_time')->nullable();
            $table->integer('charge');
            $table->string('paymenttype');
            $table->string('remarks');
            $table->string('slot_name');



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
        Schema::dropIfExists('paymentss');
    }
}
