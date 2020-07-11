<?php


namespace App\Service;


use App\Repositories\colorRepository;

class colorService
{
    /**
     * @var colorRepository
     */
    private $colorRepo;

    public function __construct(
        colorRepository $colorRepository
    )
    {
        $this->colorRepo = $colorRepository;
    }
    public function getAllColor (){
        return $this->colorRepo->getColors();
    }

}
