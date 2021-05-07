<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Jamies',
            'logo_image_url' => 'https://www.clipartmax.com/png/middle/356-3563477_families-are-forever-clipart-soul-food-restaurant-logos.png ',
            'address_1' => '328 Malcolm X Blvd',
            'address_2' => '',
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '10027',
            'phone_number' => '718-219-8652',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}


