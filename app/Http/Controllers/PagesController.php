<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    // public function homePage() {
    //     $products = Products::all();
    //     return view('pages.home', compact('products'));
    // }

    public function homePage() {
        $products = Products::all();
        $categories = Categories::all();
        return Inertia::render('Home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function contactPage() {
        return view('pages.contact');
    }

    public function helloWorldPage() {
        $products = Products::all();
        return Inertia::render('HelloWorld', [
            'products' => $products,
        ]);
    }
}
