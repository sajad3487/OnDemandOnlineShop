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
    public function getUserWithInfo ($data){
        return User::where('name',$data->name)
            ->orWhere('tel',$data->tel)
            ->orWhere('email',$data->email)
            ->with(array('quotation','quotation.request','quotation.purchased'))
            ->first();

    }
}
