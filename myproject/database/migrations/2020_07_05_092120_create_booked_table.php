<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nameCustomer");
            $table->bigInteger('booked_idphong')->unsigned();
            $table->foreign('booked_idphong')->references('id')->on('room')->onDelete('cascade');
            $table->date('dateBooked');
            $table->string('numDays');
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
        Schema::dropIfExists('booked');
    }
}
