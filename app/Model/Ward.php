<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table="wards";
    protected $fillable=['name','gso_id','district_id'];
    public function District()
    {
        return $this->belongsTo('App\Model\District');
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
