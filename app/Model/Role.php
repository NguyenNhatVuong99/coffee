<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table="roles";
    protected $fillable=['name','permission','status'];
    // public function User()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function scopeStatus($query){
    //     return $query->where('status',$query);
    // }
}
