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

    public function getProductPicture()
    {
        return $this->mediaRepo->getPictureForProduct();
    }

    public function getPicturesExceptProductPic($media){
        return $this->mediaRepo->getMediaExceptProductMedia($media);
    }

}
