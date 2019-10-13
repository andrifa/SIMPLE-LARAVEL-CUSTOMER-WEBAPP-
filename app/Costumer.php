<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['name','email','occupation'];
    //
}
