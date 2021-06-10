<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instance creation
        for($i=0; $i<20; $i++){
            $new_holiday = new Holiday();
            $new_holiday->People = 2;
            $new_holiday->Rooms = 1;
            $new_holiday->Location = 'Mountains';
            $new_holiday->Country = 'Scotland';
            $new_holiday->Arrival = '2021/07/10';
            $new_holiday->Departure = '2021/07/16';
            $new_holiday->Description = 'The place..lorem ipsum ';
            $new_holiday->Availability = 1;
            $new_holiday->Price = 700;

            $new_holiday->save();
        } 
    }
}
