<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = [
        'type',
        'title',
        'subtitle',
        'second_subtitle',
        'button_text',
        'button_link',
        'media_path',
        'status',
    ];
}
