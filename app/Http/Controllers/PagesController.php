<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Inertia\Inertia;


class PagesController extends Controller
{
    // public function homePage() {
    //     $products = Products::all();
    //     return view('pages.home', compact('products'));
    // }

    public function homePage() {
        $products = Products::all();
        return Inertia::render('Home', [
            'products' => $products,
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
