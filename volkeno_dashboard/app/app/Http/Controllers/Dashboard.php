<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Client;

class Dashboard extends Controller
{
    public function dashboard(){
        if (auth()->guest()) {
            return redirect('/login');
        }
        $prod = Product::all();
        $cat = Category::all();
        $client = Client::all();
        return view('base',['prod'=>$prod,'cat'=>$cat,'client'=>$client]);
    }

    public function products(){
        if (auth()->guest()) {
            return redirect('/login');
        }
        $prod = Product::all();
        return view('product/product',['prod'=>$prod]);
    }

    public function category(){
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::all();
        return view('category/category',['cat'=>$cat]);
    }


    public function client(){
        if (auth()->guest()) {
            return redirect('/login');
        }
        $client = Client::all();
        return view('client/client',['client'=>$client]);
    }
}
