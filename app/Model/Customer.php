<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="contacts";
    protected $fillable=['name','email','province_id','district_id','ward_id','ward_id','address','birthday','gender','avatar'];
    public function District()
    {
        return $this->belongsTo('App\Model\District');
    }
    public function Province()
    {
        return $this->belongsTo('App\Model\Province');
    }
    public function Ward()
    {
        return $this->belongsTo('App\Model\Ward');
    }
    
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
