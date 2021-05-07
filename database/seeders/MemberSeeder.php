<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
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
            DB::table('members')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth
            ]);
        }


        // DB::table('members')->insert([
        //     'fname' => 'Jim',
        //     'lname' => 'Jones',
        //     'email' => 'jim@gmail.com',
        //     'phone_number' => ('513-555-6944'),
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now()
        // ]);

    }
}
