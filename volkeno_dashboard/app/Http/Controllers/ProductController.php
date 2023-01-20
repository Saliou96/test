<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allproduct()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $prod = Product::all();
        return view('product/product',['prod'=>$prod]);
    }

    public function addproduct()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::all();
        return view('product/addproduct',['cat' => $cat]);
    }

    public function storeproduct(Request $req)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $prod = Product::create([
            'libelle' => $req->input('libelle'),
            'description' => $req->input('description'),
        ]);
        $prod = Product::all();
        return redirect('/product');
    }

    public function editproduct($id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $prod = Product::findorFail($id);
        $cat = Category::all();
        return view('product/editproduct', ['prod' => $prod,'cat'=>$cat]);
    }

    public function updateproduct(Request $req,$id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $prod = Product::findorFail($id);

        $prod->libelle = $req->input('new_libelle');
        $prod->description = $req->input('new_description');
        $prod->save();
        $prod = Product::all();
        return redirect('/product');
    }

    public function destroypro($id)
    {
        $prod = Product::findOrFail($id);
        $prod->delete();
        return redirect('/product')->with('success', 'Supprimé avec succès');
    }

}
