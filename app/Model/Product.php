<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="products";
    protected $fillable=['name','image','description','category_id','price','status'];
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    public function scopeStatus($query){
        return $query->where('status',1);
    }
}
