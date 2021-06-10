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
            $table->tinyInteger('People');
            $table->tinyInteger('Rooms')->unsigned();
            $table->string('Location', 50);
            $table->string('Country', 50);
            $table->date('Arrival');
            $table->date('Departure');
            $table->text('Description')->nullable();
            $table->boolean('Availability')->default(1);
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
