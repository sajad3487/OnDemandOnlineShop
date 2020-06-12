<?php


namespace App\Repositories;


use App\User;

class userRepository
{
    public function getUserById ($id){
        return User::findOrFail($id);
    }
    public function updateUser ($id,$data){
        $user = $this->getUserById($id);
        $user->tel = $data['tel'];
        $user->address = $data['address'];
        $user->save();
    }
}
