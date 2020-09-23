<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Provice extends Model
{
    protected $table="provinces";
    protected $fillable=['name','gso_id'];
  
}
