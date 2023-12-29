<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;


class HomeController extends Controller
{
    public function homePage() {
        $products = Products::inRandomOrder()->get();
        $categories = Categories::all();
        return Inertia::render('Home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function contactPage() {
        return view('pages.contact');
    }
}
