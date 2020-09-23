<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table="cart_details";
    protected $fillable=['cart_id','product_id','quantity','total','note','size_id','user_id'];
    public function Cart()
    {
        return $this->hasOne('App\Model\Cart');
    }
    public function Product()
    {
        return $this->belongsTo('App\Model\Product');
    }
    public function Size()
    {
        return $this->belongsTo('App\Model\Size');
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
