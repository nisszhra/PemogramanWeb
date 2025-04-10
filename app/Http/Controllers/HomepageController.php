<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    //fungsi untuk menampilkan halaman homepage
    public function index(){

        $categories = Categories::all();     
            return view('web.homepage',['Categories' => $categories]);
    }

    public function products(){
        $title = 'Products';
        return view('web.products',['title'=>$title]);
    }

    public function  product($slug){
        $title = "Single Product";
    return view('web.single_product',['title'=>$title,'slug'=>$slug]);
    }

    public function categories(){
        $title = "Categories";
    return view('web.categories',['title'=>$title]);
    }

    public function category($slug){
        {
            $category = Categories::find($slug);
            return view('web.category_by_slug', ['slug' => $slug, 'category' => $category]);
        }
    }

    public function cart(){
        $title = "Cart";
    return view('web.cart', ['title'=>$title]);
    }

    public function checkout(){
        $title = "Checkout";
    return view('web.checkout'. ['title'=>$title]);
    }


}