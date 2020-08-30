<?php


namespace App\Repositories;

use App\DesignPatterns\Repository;
use App\media;

class mediaRepository extends Repository
{
    public function __construct()
    {
        $this->model = new media();
    }

    public function getPictureForProduct()
    {
        return media::where('type','product')
            ->get();
    }

    public function getMediaExceptProductMedia ($media){
        return media::whereIn('id',$media)
            ->get();
    }


}
