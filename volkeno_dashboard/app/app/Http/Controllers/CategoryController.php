<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use Auth;


class CategoryController extends Controller
{
    public function allcategory()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::all();
        return view('category/category',['cat'=>$cat]);
    }

    public function addcategory()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        return view('category/addcategory');
    }

    public function storecategory(Request $req)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::create([
            'title' => $req->input('title'),
        ]);
        $cat = Category::all();
        return redirect('/category');
    }

    public function editcategory($id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::findorFail($id);
        return view('category/editcategory', ['cat' => $cat]);
    }

    public function updatecategory(Request $req,$id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $cat = Category::findorFail($id);
        $cat->title = $req->input('new_title');
        $cat->save();
        $cat = Category::all();
        return redirect('/category');
    }

    public function destroycat($id)
    {
        $cat = Category::findOrFail($id);
        $cat->delete();
        return redirect('/category')->with('success', 'Supprimé avec succès');
    }
}
