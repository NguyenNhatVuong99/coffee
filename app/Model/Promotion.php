<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table="promotions";
    protected $fillable=['name','code','discount','status'];

}
