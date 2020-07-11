<?php


namespace App\Repositories;


use App\color;

class colorRepository
{
    public function getColors(){
        return color::all();
    }
    public function deleteColorById($id){
        return color::find($id)->delete();
    }
    public function storeColor ($data){
        return color::create($data);
    }

}
