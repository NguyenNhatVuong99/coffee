<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $table="sizes";
    protected $fillable=['name','name'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
