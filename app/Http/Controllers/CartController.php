<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\Product;
use App\Model\Category;
use App\Model\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories']=Category::status()->get();
        $data['products']=Product::with('category')->status()->get();
        if(Session::has('cart')){
           $oldCart=Session::get('cart');
           $cart=new Cart($oldCart);
           $data['carts']=$cart->products;
           $data['totalPrice']=$cart->totalPrice;
           $data['subPrice']=$cart->subPrice;
           $data['delivery']=$cart->delivery;
           $data['discount']=$cart->discount;
           $data['totalQuantity']=$cart->totalQuantity;
       }
       return view('shop.cart',$data);
    }
    public function addCart(Request $request )
    {
        $id=$request->id;
        $product=Product::find($id);
        $oldCart=Session('cart')?Session('cart'): null;
        $newCart=new Cart($oldCart);
        $newCart->addCart($product,$id);
        $request->session()->put('cart',$newCart);
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            $data['carts']=array_values($cart->products);
            $data['totalPrice']=$cart->totalPrice;
            $data['subPrice']=$cart->subPrice;
            $data['delivery']=$cart->delivery;
            $data['discount']=$cart->discount;
            $data['totalQuantity']=$cart->totalQuantity;
        }
        return json_encode($data);
    }
    public function updateCart(Request $request )
    {
        $id=$request->id;
        $quantity=$request->quantity;
        $oldCart=Session('cart')?Session('cart'): null;
        $newCart=new Cart($oldCart);
        $newCart->updateCart($id,$quantity);
        $request->session()->put('cart',$newCart);
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            $data['carts']=array_values($cart->products);
            $data['totalPrice']=$cart->totalPrice;
            $data['subPrice']=$cart->subPrice;
            $data['delivery']=$cart->delivery;
            $data['discount']=$cart->discount;
            $data['totalQuantity']=$cart->totalQuantity;
        }
        return json_encode($data);
    }
    public function deleteCart(Request $request)
    {
        $id=$request->id;
        $product=Product::find($id);
        $oldCart=Session('cart')?Session('cart'): null;
        $newCart=new Cart($oldCart);
        $newCart->deleteCart($id);
        if(Count($newCart->products)>0){
            $request->session()->put('cart',$newCart);
        }
        else{
            $request->session()->forget('cart');
        }
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            $data['carts']=array_values($cart->products);
            $data['totalPrice']=$cart->totalPrice;
            $data['subPrice']=$cart->subPrice;
            $data['delivery']=$cart->delivery;
            $data['discount']=$cart->discount;
            $data['totalQuantity']=$cart->totalQuantity;

        }
        return json_encode($data);
    }
    public function promotion(Request $request){
        $code=$request->code;
        $Promotion=Promotion::where('code',$code)->first();
        if($Promotion==null){
            return response()
            ->json([
                'message' => 'Mã code không chính xác',
                'status' => 404
            ], 404);
        }
        else{
            $oldCart=Session('cart')?Session('cart'): null;
            $newCart=new Cart($oldCart);
            $discount=$Promotion->discount;
            $newCart->promotion($discount);
            $request->session()->put('cart',$newCart);
            if(Session::has('cart')){
                $oldCart=Session::get('cart');
                $cart=new Cart($oldCart);
                $data['carts']=array_values($cart->products);
                $data['totalPrice']=$cart->totalPrice;
                $data['subPrice']=$cart->subPrice;
                $data['delivery']=$cart->delivery;
                $data['discount']=$cart->discount;
                $data['totalQuantity']=$cart->totalQuantity;
            }
            return json_encode($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
