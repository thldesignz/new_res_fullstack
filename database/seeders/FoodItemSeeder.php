<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Onion melt',
            'description' => 'Our special onion is hand-carved, cooked until golden and ready to dip into our spicy signature bloom sauce ',
            'image_url' => '',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'STEAKHOUSE MAC & CHEESE BITES',
            'description' => 'Eight golden bites filled with macaroni, Asiago, Mozzarella and Parmesan cheese. Served with house-made ranch dressing. ',
            'image_url' => '',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'grilled shrimp',
            'description' => 'Sprinkled with a special blend of seasonings and grilled. Served with grilled artisan bread, garlic herb butter and fresh tomato basil.  ',
            'image_url' => '',
            'price' => 13.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Jamie fire wings',
            'description' => 'Chicken wings tossed in our secret spices served with our Blue Cheese dressing and celery. Choose mild, medium or hot. ',
            'image_url' => '',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'gold coast tropical shrimp',
            'description' => 'Hand-dipped in batter, rolled in coconut and fried golden. Paired with Creole marmalade. Available in small and regular size. ',
            'image_url' => '',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'jamies cheese fries',
            'description' => 'Topped with melted Monterey Jack, Cheddar and chopped bacon with house-made ranch dressing. Available in small and large size.  ',
            'image_url' => '',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Chicken Sandwich',
            'description' => 'Marinated and grilled, then basted with BBQ sauce. Served with lettuce, tomato and onion on a Texas-sized bun with steak fries and a pickle spear on the side. ',
            'image_url' => '',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Mushroom Jack Chicken Sandwich',
            'description' => 'Grilled chicken breast, sautéed mushrooms and melted jack cheese with lettuce, tomato and onion. Served on a toasted, Texas-sized bun with steak fries and a pickle spear on the side. ',
            'image_url' => '',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Bacon Cheeseburger',
            'description' => 'A 1/2 lb. of fresh ground chuck topped with bacon strips and American cheese. Served on a toasted, Texas-sized bun with lettuce, tomato, and onion. Served with steak fries and a pickle spear on the side. ',
            'image_url' => '',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Smokehouse Burger',
            'description' => 'A 1/2 lb. of fresh ground chuck topped with sautéed mushrooms, onions and BBQ sauce over American and jack cheeses. Served on a toasted, Texas-sized bun with lettuce, tomato, and onion, along with steak fries and a pickle spear on the side. ',
            'image_url' => '',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Grilled BBQ Chicken Combos',
            'description' => 'Each combo is served with your choice of two sides: Grilled BBQ Chicken with 6 oz. Sirloin* Grilled BBQ Chicken with Ribs ',
            'image_url' => '',
            'price' => 15.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'New York Strips',
            'description' => 'This generous 12 oz. cut is aged longer for extra tenderness and flavor. Served with your choice of two sides. Also available in 8 oz. Thick Cut. ',
            'image_url' => '',
            'price' => 17.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Porterhouse T-Bone',
            'description' => 'Filet and New York Strip come together for one 23 oz. Texas-sized USDA Choice steak. Served with your choice of two sides. ',
            'image_url' => '',
            'price' => 20.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Ribs',
            'description' => 'Our award-winning ribs are slow-cooked with a unique blend of seasonings and our signature BBQ sauce. Served with your choice of two sides. Half Slab or Full Slab. ',
            'image_url' => '',
            'price' => 22.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Steak Fries',
            'description' => 'Plain or Loaded with Cheddar Cheese & Bacons Bits. ',
            'image_url' => '',
            'price' => 3.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Mashed Potatoes',
            'description' => 'Plain or Loaded with Cheddar Cheese & Bacons Bits. ',
            'image_url' => '',
            'price' => 3.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Baked Potato',
            'description' => 'Plain or Loaded with Cheddar Cheese & Bacons Bits. ',
            'image_url' => '',
            'price' => 3.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Sweet Potato',
            'description' => 'Plain or loaded with caramel sauce and toasted marshmallows.',
            'image_url' => '',
            'price' => 4.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Grannys Apple Classic',
            'description' => 'apple pie.',
            'image_url' => '',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Strawberry Cheesecake',
            'description' => '',
            'image_url' => '',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Big Ol Brownie',
            'description' => '',
            'image_url' => '',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'The Legend Margarita',
            'description' => 'Our New Top Shelf Margarita. A legendary blend of three Tequilas: Patrón® Silver, Patrón® Reposado, and Patrón® Anejo with Grand Marnier®, shaken with our signature margarita sour and served with black lava salt',
            'image_url' => '',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Mango Margarita',
            'description' => 'Our signature margarita blended with mango puree. Served with a Tajin chili lime salt for a pop of flavor. Strawberry and Raspberry Margaritas also available!',
            'image_url' => '',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Kennys Cooler',
            'description' => 'Inspired by Kenny Chesneys island lifestyle! Blue Chair Bay® Coconut Rum and DeKuyper® Peach Schnapps mixed with Minute Maid® Lemonade, our signature sweet and sour, and Monin® Blue Curacao.',
            'image_url' => '',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Hurricane Margarita',
            'description' => 'Our New Top Shelf Margarita. A legendary blend of three Tequilas: Patrón® Silver, Patrón® Reposado, and Patrón® Anejo with Grand Marnier®, shaken with our signature margarita sour and served with black lava salt',
            'image_url' => '',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

    }
}
