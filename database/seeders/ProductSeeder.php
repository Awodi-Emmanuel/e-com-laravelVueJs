<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Product::create([
        //     'name' => 'Lorem Ispum',
        //     'slug' => 'Lorem Ispum Elsom',
        //     'description' => '<ul><li>Helper Product</li></ul>',
        //     'image_name' => 'arrivals1.png',
        //     'price' => 65.00,
        //     'sale_price' => 30.00,
        // ]);

        product::create([
            'name' => 'Wooden Chair',
            'slug' => 'wooden_chair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals1.png',
            'price' => 65.00,
            'sale_price' => 30.00

        ]);
        product::create([
            'name' => 'Single Armchair',
            'slug' => 'single_armchair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals2.png',
            'price' => 80.00,
            'sale_price' => 40.00

        ]);
        product::create([
            'name' => 'Wooden Armchair',
            'slug' => 'wooden_armchair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals3.png',
            'price' => 40.00,
            'sale_price' => 20.00

        ]);
        product::create([
            'name' => 'Stylish Chair',
            'slug' => 'stylish_chair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals4.png',
            'price' => 100.00,
            'sale_price' => 50.00

        ]);
        product::create([
            'name' => 'Modern Chair',
            'slug' => 'modern_chair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals5.png',
            'price' => 120.00,
            'sale_price' => 60.00

        ]);
        product::create([
            'name' => 'Mapple Wood Dinning Table',
            'slug' => 'mapple_wood_dinning_table',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals6.png',
            'price' => 140.00,
            'sale_price' => 70.00

        ]);
        product::create([
            'name' => 'Arm Chair',
            'slug' => 'arm_chair',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals7.png',
            'price' => 90.00,
            'sale_price' => 45.00

        ]);
        product::create([
            'name' => 'Wooden Bed',
            'slug' => 'wooden_bed',
            'description' => 'Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut',
            'image_name' => 'arrivals8.png',
            'price' => 140.00,
            'sale_price' => 70.00

        ]);
    }
}
