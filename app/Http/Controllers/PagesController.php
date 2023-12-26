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

    public function shopPage() {
        $products = Products::inRandomOrder()->get();
        $categories = Categories::all();
        return Inertia::render('Shop/Index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function contactPage() {
        return view('pages.contact');
    }
}
