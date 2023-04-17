<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shops = [
            [
                'shop_id' => 1,
                'shop_name' => 'Amazon',
            ],
            [
                'shop_id' => 2,
                'shop_name' => 'Yahoo',
            ],
            [
                'shop_id' => 3,
                'shop_name' => 'Rakuten',
            ]
        ];
        foreach ($shops as $shop){
            \App\Models\Shop::firstOrCreate($shop);
        }
    }
}
