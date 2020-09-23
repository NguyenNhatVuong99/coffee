<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table="districts";
    protected $fillable=['customer_id','gso_id','province_id'];
    public function Province()
    {
        return $this->belongsTo('App\Model\Province');
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
