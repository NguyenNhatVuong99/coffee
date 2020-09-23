<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['name','status'];
    
    public function scopeStatus($query){
        return $query->where('status',1);
    }
    public function Product(){
        return $this->hasMany('App\Model\Product');
    }
}
