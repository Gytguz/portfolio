<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // WOMENS
        for ($i=1; $i <= 12; $i++) {
            $category = Categories::find(1);
            $product = Products::create([
                'name' => 'Womens '.$i,
                'slug' => 'women-'.$i,
                'details' => 'women\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'images/products/main_image/womens-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(99, 999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }
                $product = Products::find(3);
                $product->categories()->attach(2);

        // $product = Products::find(2);
        // $product->update([
        //     'alt_images' => [
        //         'images/products/alt_images/womens-1.png',
        //         'images/products/alt_images/womens-2.png',
        //         'images/products/alt_images/womens-3.png',
        //         'images/products/alt_images/womens-4.png',
        //     ]
        // ]);
        // $product->categories()->attach(3);

        // MENS
        for ($i=1; $i <= 12; $i++) {
            $category = Categories::find(2);
            Products::create([
                'name' => 'Mens '.$i,
                'slug' => 'mens-'.$i,
                'details' => 'men\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'images/products/main_image/mens-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(99, 999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }

        // Kids
        for ($i=1; $i <= 12; $i++) {
            $category = Categories::find(3);
            Products::create([
                'name' => 'Kids '.$i,
                'slug' => 'kids-'.$i,
                'details' => 'kid\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'images/products/main_image/kids-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(99, 999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }
    }
}