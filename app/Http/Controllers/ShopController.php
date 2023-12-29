<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopPage(Request $request)
    {
        $categories = Categories::all();
        $selectedCategory = $request->query('category');

        // If a category is selected in the query string, filter products by that category
        if ($selectedCategory) {
            $products = Products::whereHas('categories', function ($query) use ($selectedCategory) {
                $query->where('slug', $selectedCategory);
            })->inRandomOrder()->get();

        } else {
            // If no category is selected, get all products
            $products = Products::inRandomOrder()->get();
            $selectedCategory = 'All';
        }

        return Inertia::render('Shop/Index', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    public function productPage($id) {
        $product = Products::find($id);
        $categories = $product->categories;
        $categoryIds = $categories->pluck('id')->toArray();
        $similarProducts = Products::whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('categories.id', $categoryIds);
        })->where('products.id', '!=', $id)->inRandomOrder()->take(4)->get();

        return Inertia::render('Shop/Product', [
            'product' => $product,
            'categories' => $categories,
            'similarProducts' => $similarProducts,
        ]);
    }
}
