<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contacts";
    protected $fillable=['customer_id','subject','message','email','status'];
    public function Customer()
    {
        return $this->belongsTo('App\Model\Customer');
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
