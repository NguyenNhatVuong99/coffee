<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table="information";
    protected $fillable=['phone','email','address'];
   
}
