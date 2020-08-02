<?php


namespace App\Repositories;


use App\size;

class sizeRepository
{
    public function getSizes(){
        return size::all();
    }
    public function deleteSizeById($id){
        return size::find($id)->delete();
    }
    public function storeSize ($data){
        size::create($data);
    }

}
