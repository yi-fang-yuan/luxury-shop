<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //gucci Gang
        for ($i = 1; $i < 10 ; $i++) {
            Product::create([
                'name' => 'GG Running Diamond X ' . $i,
                'category_id' => 1,
                'slug' => 'gucci-' . $i,
                'details' => [20, 21, 22] [array_rand([20, 21, 22])] . 'diamonds,' . [0.05, 0.06, 0.7] [array_rand([0.05, 0.06, 0.7])] . 'carrots',
                'price' => rand(700, 2000),
                'image' => 'image/product/gucci/gucci-' . $i . '.jpg',
                'description'=> 'Ring in 18 kt yellow gold featuring the magnificent Sacred Heart, symbol of unconditional love and faith, and an elegant bow, both enriched with diamonds. The DG logo is engraved inside the heart.'
            ]);
        }




        //Gucci Gang
        for ($i = 10; $i < 19; $i++) {
            Product::insert([
                'name' => 'Gucci Off The Grid Wallet' . $i,
                'category_id' => 1,
                'slug' => 'gucci-' . $i,
                'details' => [8.3, 8.4, 8.6] [array_rand([8.3, 8.4, 8.6])] . 'Width X ' . [3.5, 3.6, 3.7] [array_rand([3.5, 3.6, 3.7])] . 'Height',
                'price' => rand(300, 500),
                'image' => 'image/product/gucci/gucci-' . $i . '.jpg',
                'description'=>' Gucci Off The Grid is the first collection from Gucci Circular Lines—a concept created to support the House\'s vision for circular production. Designed for those mindful of their environmental impact, Gucci Off The Grid uses recycled, organic, bio-based and sustainably sourced materials.',
            ]);
        }

        //Prada Bags
        for ($i = 1; $i < 12; $i++) {
            Product::create([
                'name' => 'Prada Bag' . $i,
                'category_id' => 2,
                'slug' => 'prada-' . $i,
                'details' => [11, 13, 15] [array_rand([11, 13, 15])] . 'Width X ' . [9, 10, 11] [array_rand([9, 10, 11])] . 'Height' . [4,5,6,7] [array_rand([4,5,6,7])],
                'price' => rand(700, 2000),
                'image' => 'image/product/prada/prada-' . $i . '.jpeg',
                'description'=> 'Prada\'s beloved Saffiano-leather double bag gets a modern makeover with a color-pop lining yet retains the iconic design elements of a truly signature style.'
            ]);
        }

        //Hermes
        for ($i = 1; $i < 14; $i++) {
            Product::create([
                'name' => 'Kelly belt' . $i,
                'category_id' => 3,
                'slug' => 'hermes-' . $i,
                'details' => '18 mm',
                'price' => rand(1000, 2000),
                'image' => 'image/product/hermes/hermes-' . $i . '.jpg',
                'description'=> 'Leather belt in Epsom calfskin with rose gold plated Kelly buckle. Thanks to a clever sliding system, this one-size-fits-most belt may be worn at the waist or on the hips.'
            ]);
        }


        //Dolce
        for ($i = 1; $i < 15; $i++) {
            Product::create([
                'name' => 'Dolce & Gabbana Jewelry' . $i,
                'category_id' => 4,
                'slug' => 'dolce-' . $i,
                'details' => 'Made In Italy',
                'price' => rand(500, 2000),
                'image' => 'image/product/dolce/dolce-' . $i . '.jpg',
                'description'=> 'Necklace in 18 kt yellow gold featuring a thin «belcher» chain and a pendant composed of three elements that flow elegantly from top to bottom in the following order: an elegant bow adorned with uncolored diamonds, magnificent Sacred Heart framed with diamonds, symbol of unconditional love and faith, and elegant pear drop pearl at the bottom. The DG logo is engraved inside the heart.'
            ]);
        }
    }
}
