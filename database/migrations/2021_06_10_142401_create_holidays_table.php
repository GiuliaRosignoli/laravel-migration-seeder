<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('Number of people');
            $table->tinyInteger('Rooms')->unsigned();
            $table->string('Location', 50);
            $table->string('Country', 50);
            $table->date('Date of Arrival');
            $table->date('Date of Departure');
            $table->text('Description')->nullable();
            $table->boolean('Availability');
            $table->smallInteger('Price')->unsigned();
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
        Schema::dropIfExists('holidays');
    }
}
