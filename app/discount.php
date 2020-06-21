<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
    public $fillable = ['percentage','discount_code','discount_expiration','limit'];
}
