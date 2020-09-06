<?php


namespace App\Service;


use App\Repositories\pageRepository;

class pageService
{
    /**
     * @var pageRepository
     */
    private $pageRepo;

    public function __construct(
        pageRepository $pageRepository
    )
    {
        $this->pageRepo = $pageRepository;
    }

    public function create (){

    }

    public function update ($data,$id){
        return $this->pageRepo->update($data,$id);
    }

    public function getPage($filter){
         return $this->pageRepo->getPageInfo($filter);
    }


}
