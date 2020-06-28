<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
           ['name'=>'Gucci','slug'=>'gucci'],
           ['name'=>'Prada','slug'=>'prada'],
            ['name'=>'Hermes','slug'=>'hermes'],
            ['name'=>'Dolce & Gabbana','slug'=>'Dolce'],
        ]);
    }
}
