<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currency extends Model
{
    public $fillable =  ['usd','euro','pound','canada_dollar','uae','tl'];
}
