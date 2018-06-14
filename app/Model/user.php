<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class user extends Model implements AuthenticatableContract
{
   
    use Authenticatable;
    protected $fillable = ['profesion_id','nombre','email','password'];
  
}
