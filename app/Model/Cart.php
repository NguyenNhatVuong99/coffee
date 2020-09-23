<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table="carts";
    protected $fillable=['user_id','customer_id ','subtotal','delivery','promotion_id','total','address','status'];
    public $products=null;
    public $totalPrice=0;
    public $subPrice=0;
    public $delivery=0;
    public $discount=0;
    public $totalQuantity=0;
    public function __construct($cart){
        if($cart){
            $this->products=$cart->products;
            // $this->totalPrice=$cart->totalPrice;
            $this->subPrice=$cart->subPrice;
            $this->delivery=$cart->delivery;
            $this->discount=$cart->discount;
                        // dd($this->discount);

            $this->totalQuantity=$cart->totalQuantity;
            $this->totalPrice=$this->subPrice-$this->discount*$this->subPrice/100+$this->delivery;
            // dd($this->totalPrice);

            

        }
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    // public function Promotion()
    // {
    //     return $this->belongsTo(Promotion::class);
    // }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
    public function addCart($product, $id){
        $newProduct=['quantity'=>0, 'price'=>$product->price,'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct=$this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price']=$newProduct['quantity']*$product->price;
        $this->products[$id]=$newProduct;
        $this->subPrice+=$product->price;
        $this->totalPrice=$this->subPrice-$this->dicount*$this->subPrice/100+$this->delivery;
        $this->totalQuantity++;
    }
    public function updateCart($id,$quantity){
        $this->totalQuantity-=$this->products[$id]['quantity'];
        $this->subPrice-=$this->products[$id]['price'];
        $this->products[$id]['quantity']=$quantity;
        $this->products[$id]['price']=$quantity*$this->products[$id]['productInfo']->price;
        $this->totalQuantity+=$this->products[$id]['quantity'];
        $this->subPrice+=$this->products[$id]['price'];
        $this->totalPrice=$this->subPrice-$this->dicount*$this->subPrice/100+$this->delivery;

    }
    public function deleteCart($id){

        $this->totalQuantity=$this->products[$id]['quantity'];
        $this->subPrice-=$this->products[$id]['price'];
        $this->totalPrice=$this->subPrice-$this->dicount*$this->subPrice/100+$this->delivery;
        unset($this->products[$id]);
    }
    public function promotion($discount){
        $this->discount=$discount;
        $this->totalPrice=$this->subPrice-$this->discount*$this->subPrice/100+$this->delivery;
    }
}
