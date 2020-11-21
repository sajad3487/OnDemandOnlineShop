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
    public function getUserByInfo ($data){
        if ($data['name'] != ''){
            return $this->userRepo->getUserWithName($data['name']);
        }elseif ($data['email'] != ''){
            return $this->userRepo->getUserWithEmail($data['email']);
        }elseif ($data['tel'] != ''){
            return $this->userRepo->getUserWithTel($data['tel']);
        }else{
            return null;
        }
//        return $this->userRepo->getUserWithInfo($data);
    }

    public function countCustomer (){
        return $this->userRepo->getCountOfCustomer ();
    }

}
