<?php


namespace App\Repositories;


use App\color;

class colorRepository
{
    public function getColors(){
        return color::all();
    }

}
