<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function homePage() {
        $products = Products::inRandomOrder()->get();
        $categories = Categories::all();
        return Inertia::render('Home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

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

    public function contactPage() {
        return view('pages.contact');
    }
}
