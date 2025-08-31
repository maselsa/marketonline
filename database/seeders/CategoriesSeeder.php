<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Elektronik', 'Pakaian', 'Makanan', 'Olahraga'];

        foreach ($categories as $name) {
            Category::updateOrCreate(
                ['slug' => str()->slug($name)],
                ['name' => $name]
            );
        }
    }
}
