<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://flawlessjae.net/wp-content/uploads/2021/04/CHIPS.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://flawlessjae.net/wp-content/uploads/2021/04/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Entree',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://flawlessjae.net/wp-content/uploads/2021/04/342-3422633_pork-entrees-steak-pork-png.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        DB::table('food_categories')->insert([
            'title' => 'Sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://flawlessjae.net/wp-content/uploads/2021/04/Download-Salad-Transparent-PNG.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://flawlessjae.net/wp-content/uploads/2021/04/Download-Cupcake-PNG-Transparent-Image-420x190-1.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://lh3.googleusercontent.com/proxy/NxJ5XgwoYMI57YNXHcrBVtZTrLNFW3IskbAXKMfLpRh9NdgACbfPff69O-4UtJbNqWLcq1XOf1vL1E6eCSLamrrCeIgmtS7kAIQgcAyjrVrYyDhDmSPsfuBrcg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


    }
}
