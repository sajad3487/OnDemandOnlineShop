<?php


namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\RequestItem;

class requestRepository
{
    /**
     * @var ItemRequest
     */
    private $requestItem;

    public function __construct()
    {
        $this->requestItem = new ItemRequest();
    }

    public function createRequestItem ($data){
//        $this->requestItem = [
//            'link' => $data['link'],
//            'quantity' => $data['quantity'],
//            'description' => $data['description'],
//        ];
        $data['user_id'] = auth()->id();
        return RequestItem::create(($data)->all());
    }

    public function requestOfCard($user_id){
        return RequestItem::where(['user_id'=>$user_id,'quotation_id'=>3])->get();
    }
    public function updateRequestById($id,$quotation_id){
        $requests = $this->requestOfCard($id);
        foreach ($requests as $request){
            $request->quotation_id = $quotation_id;
            $request->save();
        }
    }
    public function deleteItemById ($id){
        return RequestItem::findOrFail($id)->delete();
    }
    public function countItemInCart($user_id){
        return \DB::table('request_items')
            ->where('user_id',$user_id)
            ->where('quotation_id',3)
            ->count();
    }
    public function deleteItemByUserId($user_id){
        return \DB::table('request_items')
            ->where('user_id',$user_id)
            ->where('quotation_id',3)
            ->delete();
    }
    public function quoteRequestById ($id,$data){
        return RequestItem::where('id',$id)->update($data);

    }
}
