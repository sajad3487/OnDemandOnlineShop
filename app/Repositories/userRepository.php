<?php


namespace App\Repositories;


use App\User;

class userRepository
{
    public function getUserById ($id){
        return User::where('id',$id)
            ->with(array('quotation','quotation.request','quotation.purchased'))
            ->first();
    }
    public function updateUser ($id,$data){
        $user = $this->getUserById($id);
        $user->tel = $data['tel'];
        $user->address = $data['address'];
        $user->save();
    }
    public function getUserWithName ($data){
        return User::where('name',$data)
            ->with(array('quotation','quotation.request','quotation.purchased'))
            ->first();
    }
    public function getUserWithEmail ($data){
        return User::where('email',$data)
            ->with(array('quotation','quotation.request','quotation.purchased'))
            ->first();
    }
    public function getUserWithTel ($data){
        return User::where('tel',$data)
            ->with(array('quotation','quotation.request','quotation.purchased'))
            ->first();
    }

    public function getCountOfCustomer (){
        return User::where('roles',1)->count();
    }
}
