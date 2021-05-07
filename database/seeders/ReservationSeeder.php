<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('reservations')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'guest_total' => $faker->numberBetween($min = 1, $max = 5),
                'time' => $faker->numberBetween($min = 6, $max = 10),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth
            ]);
        }

            // DB::table('reservations')->insert([
            //     'fname' => 'jade',
            //     'lname' => 'smith',
            //     'email' => 'dnjcis@gmail.com',
            //     'phone_number' => '3135557654',
            //     'guest_total' => '2',
            //     'time' => '8',
            //     'updated_at' => Carbon::now(),
            //         'created_at' => Carbon::now()
            // ]);

    }
}
