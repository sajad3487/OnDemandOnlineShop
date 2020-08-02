<?php


namespace App\Repositories;


use App\category;
use App\DesignPatterns\Repository;

class categoryRepository extends Repository
{
    public function __construct()
    {
        $this->model = new category();
    }

    public function getAllCategories(){
        return category::where('parent_id','0')
            ->with('child')
            ->with('child.grandChild')
            ->with('child.grandChild.greatGrandChild')
            ->get();
    }

    public function deleteChild ($id){
        return category::where('parent_id',$id)
            ->delete();
    }

    public function getChild ($id){
        return category::where('parent_id',$id)
            -> where('status',1)
            ->select('id','title')
            ->get();
    }


}
