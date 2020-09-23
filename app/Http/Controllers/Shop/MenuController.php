<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;

class MenuController extends Controller
{
    public function index(){
        $data['categories']=Category::status()->get();
        $data['products']=Product::with('category')->status()->get();
        // dd($data);
        return view('shop.menu',$data);
    }
}
