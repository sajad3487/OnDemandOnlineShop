<?php


namespace App\Service;

use App\Repositories\userRepository;

class UserService
{
    /**
     * @var userRepository
     */
    private $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function getUserWithId ($id){
        return $this->userRepo->getUserById($id);
    }
    public function updateUserInfo ($id,$data){
        $this->userRepo->updateUser($id,$data);
    }

}
