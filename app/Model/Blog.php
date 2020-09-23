<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
    protected $fillable=['title','slug','description','content','image','view','user_id','status'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeStatus($query){
        return $query->where('status',$query);
    }
}
