<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Ancestrals',
            'Sours',
            'Spirit-Forward Cocktails',
            'Duos and Trios',
            'Champagne Cocktails',
            'Highballs, Collinses, and Fizzes',
            'Juleps and Smashes',
            'Hot Drinks',
        ];

        foreach ($categories as $categoryName) {
            $category = new Category();
            $category->title = $categoryName;
            $category->save();
        }
    }
}
