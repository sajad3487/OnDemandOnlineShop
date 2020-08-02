<?php


namespace App\Service;


use App\Repositories\colorRepository;
use App\Repositories\sizeRepository;

class sizeService
{
    private $sizeRepo;

    public function __construct(
        sizeRepository $sizeRepository
    )
    {
        $this->sizeRepo = $sizeRepository;
    }
    public function getAllSize (){
        return $this->sizeRepo->getSizes();
    }
    public function deleteSizeWithId($id){
        return $this->sizeRepo->deleteSizeById($id);
    }
    public function createSize ($data){
        $this->sizeRepo->storeSize($data);
    }
}
