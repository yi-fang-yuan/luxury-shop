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
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'GG Running Diamond X ' . $i,
                'slug' => 'gucci-' . $i,
                'details' => [20, 21, 22] [array_rand([20, 21, 22])] . 'diamonds,' . [0.05, 0.06, 0.7] [array_rand([0.05, 0.06, 0.7])] . 'carrots',
                'price' => rand(700, 2000),
                'image' => 'image/product/gucci/gucci-' . $i . '.jpg',
                'description'=> 'Ring in 18 kt yellow gold featuring the magnificent Sacred Heart, symbol of unconditional love and faith, and an elegant bow, both enriched with diamonds. The DG logo is engraved inside the heart.'
            ]);
        }
    }
}
