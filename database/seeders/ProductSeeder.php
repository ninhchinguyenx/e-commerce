<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        ProductVariant::query()->truncate();
        Schema::disableForeignKeyConstraints();
        ProductSize::query()->truncate();
        ProductColor::query()->truncate();
        Product::query()->truncate();
        ProductGallery::query()->truncate();
        DB::table('product_tag')->truncate();
        Tag::query()->truncate();

        Tag::factory(15)->create();

        foreach (['S', 'M', 'L', 'XL', 'XXL'] as $item) {
            ProductSize::query()->create([
                'name' => $item
            ]);
        }
        // black, blue, red, white, green
        foreach (['#000000', '#0000FF', '#FF0000', '#FFFFFF', '#008000'] as $item) {
            ProductColor::query()->create([
                'name' => $item
            ]);
        }
        for ($i = 0; $i < 1000; $i++) {
            $name = fake()->text(100);
            Product::query()->create([
                'catalogue_id' => rand(1, 2),
                'name' => $name,
                'slug' => Str::slug($name) . '-' . Str::random(8),
                'sku' => Str::random(8) . $i,
                'img_thumbnail' => 'https://canifa.com/img/1000/1500/resize/6/t/6ts24s007-pp022-1.webp',
                'price_regular' => 600000,
                'price_sale' => 550000,
            ]);
        }
        for ($i = 1; $i < 1001; $i++) {
            ProductGallery::query()->insert([
                [
                    'product_id' => $i,
                    "image" => 'https://canifa.com/img/1000/1500/resize/6/t/6ts24s007-pp022-1.webp'
                ],
                [
                    'product_id' => $i,
                    "image" => 'https://canifa.com/img/1000/1500/resize/6/t/6ts24s007-pp022-1.webp'
                ],
            ]);
        }
        for ($i = 1; $i < 1001; $i++) {
            DB::table('product_tag')->insert([
                ['product_id' => $i, 'tag_id' => rand(1, 8)],
                ['product_id' => $i, 'tag_id' => rand(9, 15)]
            ]);
        }
        for ($productID = 1; $productID < 1001; $productID++) {
            $data = [];
            for ($sizeID = 1; $sizeID < 6; $sizeID++) {
                for ($colorID = 1; $colorID < 6; $colorID++) {
                    $data[] =[
                        'product_id' => $productID,
                        'product_size_id' => $sizeID,
                        'quatity' => 100,
                        'product_color_id' => $colorID,
                        'image' => 'https://canifa.com/img/1000/1500/resize/6/t/6ts24s007-pp022-1.webp',
                    ];
                }
            }
            DB::table('product_variants')->insert($data);
        }
    }
}
