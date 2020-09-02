<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    public function product (){
        return $this->belongsToMany(product::class);
    }

    protected $fillable = ['title','file','owner_id','type','alternative_text','caption'];
}
