<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $categories = Categories::all();
        if (request()->categories){
            $products = Products::whereHas('categories', function($query){
                $query->where('slug', request()->categories);
            })->inRandomOrder()->get();
        } else {
            $products = Products::inRandomOrder()->get();
        }

        return Inertia::render('Shop/Index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
