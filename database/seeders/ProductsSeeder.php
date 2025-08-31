<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $cat = Category::first();

        Product::updateOrCreate(
            ['slug' => 'headset-gaming'],
            [
                'categories_id' => $cat->id,
                'name' => 'Headset Gaming',
                'price' => 250000,
                'stock' => 20,
                'description' => 'Headset nyaman buat gaming',
                'image' => null,
            ]
        );
    }
}
