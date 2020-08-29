<?php


namespace App\Service;


use App\Repositories\mediaRepository;

class mediaService
{
    /**
     * @var mediaRepository
     */
    private $mediaRepo;

    public function __construct(
        mediaRepository $mediaRepository
    )
    {
        $this->mediaRepo = $mediaRepository;
    }

    public function getAllPicture (){
        return $this->mediaRepo->getPictureForProduct();
    }



}
