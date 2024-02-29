<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $cocktails = [
            [
                "name" => "110 in the shade",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/xxyywq1454511117.jpg",
            ],
            [
                "name" => "151 Florida Bushwacker",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/rvwrvv1468877323.jpg",
            ],
            [
                "name" => "155 Belmont",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/yqvvqs1475667388.jpg",
            ],
            [
                "name" => "24k nightmare",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg",
            ],
            [
                "name" => "252",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/rtpxqw1468877562.jpg",
            ],
            [
                "name" => "3 Wise Men",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/wxqpyw1468877677.jpg",
            ],
            [
                "name" => "3-Mile Long Island Iced Tea",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/rrtssw1472668972.jpg",
            ],
            [
                "name" => "410 Gone",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/xtuyqv1472669026.jpg",
            ],
            [
                "name" => "50/50",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/wwpyvr1461919316.jpg",
            ],
            [
                "name" => "501 Blue",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/ywxwqs1461867097.jpg",
            ],
            [
                "name" => "57 Chevy with a White License Plate",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/qyyvtu1468878544.jpg",
            ],
            [
                "name" => "69 Special",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/vqyxqx1472669095.jpg",
            ],
            [
                "name" => "747",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/xxsxqy1472668106.jpg",
            ],
            [
                "name" => "747 Drink",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/i9suxb1582474926.jpg",
            ],
            [
                "name" => "9 1/2 Weeks",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/xvwusr1472669302.jpg",
            ],
            [
                "name" => "A Day at the Beach",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/trptts1454514474.jpg",
            ],
            [
                "name" => "A Furlong Too Late",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/ssxvww1472669166.jpg",
            ],
            [
                "name" => "A Gilligan's Island",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/wysqut1461867176.jpg",
            ],
            [
                "name" => "A midsummernight dream",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/ysqvqp1461867292.jpg",
            ],
            [
                "name" => "A Night In Old Mandalay",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/vyrvxt1461919380.jpg",
            ],
            [
                "name" => "A Piece of Ass",
                "img_url" => "https://www.thecocktaildb.com/images/media/drink/tqxyxx1472719737.jpg",
            ],
        ];

        $categoryIds = Category::all()->pluck('id');

        foreach ($cocktails as $cocktail) {
            $cocktail['category_id'] = $faker->randomElement($categoryIds);
            Cocktail::create($cocktail);
        }
    }
}
