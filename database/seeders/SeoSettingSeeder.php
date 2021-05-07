<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('seo_settings')->insert([
            'description' => " Jamies Restaurant, the “The Queen of Soul Food”, was founded bytJamie Woods, in 1962. Established in the historic village of Harlem,tJamie’s is a community favorite, known as the world’s kitchen. Serving authentic soul food for over 55 years, this icon remains a culinary must-visit for foodies. Gospel brunch Sundays, Live Music Wednesdays, and Daily Specials scream home-style cooking, within an at-home environment. Come visit for yourself, and experience why Presidents, celebrities, and Harlemites alike call  Jamie’s home",
        'keywords' => "Burgers, Local Burgers, Jamies Burgers, sould food, best burgers in town",
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
        ]);
        
    }
}
