<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;


class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Instance creation
        for($i=0; $i < 20; $i++){
            $new_holiday = new Holiday();
            $new_holiday->People = $faker-> randomDigit();
            $new_holiday->Rooms = $faker-> randomDigit();
            $new_holiday->Location = $faker->text(20);
            $new_holiday->Country = $faker->countryCode();
            $new_holiday->Arrival = $faker->dateTime();
            $new_holiday->Departure = $faker->dateTime();
            $new_holiday->Description = $faker->text(40);
            $new_holiday->Availability = $faker->randomDigit(1);
            $new_holiday->Price = $faker->randomDigit();

            $new_holiday->save();
        } 
    }
}
