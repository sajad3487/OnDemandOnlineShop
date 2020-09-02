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

    public function getPicturesExceptProductPic($media)
    {
        return $this->mediaRepo->getMediaExceptProductMedia($media);
    }

    public function deletePictures($pictures)
    {
        $this->mediaRepo->deletePicturesWithIds($pictures);
    }

    public function create ($data){
        return $this->mediaRepo->create($data);
    }

    public function getMediaById ($id){
        return $this->mediaRepo->getById($id);
    }

    public function updateMedia ($data,$id){
        return $this->mediaRepo->update($data,$id);
    }

}
