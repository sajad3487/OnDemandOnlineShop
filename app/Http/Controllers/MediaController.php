<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMediaRequest;
use App\Http\Requests\mediaRequest;
use App\Http\Requests\RemoveMediaRequest;
use App\Service\mediaService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * @var mediaService
     */
    private $mediaService;

    public function __construct(
        mediaService $mediaService
    )
    {
        $this->mediaService = $mediaService;
    }

    public function store(mediaRequest $request)
    {
        $destination = base_path() . '/public/product/' . date('Y') . '/' . date('m');
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('file');
        $newFileName = $filename . $request->file->getClientOriginalName();
        $file->move($destination, $newFileName);
        $data['file'] = '/product/' . date('Y') . '/' . date('m') . '/' . $newFileName;
        $data['title'] = $request->title;
        $data['alternative_text'] = $request->alternative_text;
        $data['caption'] = $request->caption;
        $data['type'] = "product";
        $this->mediaService->create($data);
        return redirect('/admin/shop/media');
    }

    public function index()
    {
        $pictures = $this->mediaService->getProductPicture();
        return view('panel.shop.media.indexMedia', compact('pictures'));
    }

    public function create()
    {
        return view('panel.shop.media.createMedia');
    }

    public function destroy(Request $request)
    {
        $data = $request->picture;
        $this->mediaService->deletePictures($data);
        return back();
    }

    public function edit($media_id)
    {
        $picture = $this->mediaService->getMediaById($media_id);
        return view('panel.shop.media.createMedia', compact('picture'));
    }

    public function update(mediaRequest $request,$media_id){
        $this->mediaService->updateMedia($request->all(),$media_id);
        return redirect('/admin/shop/media');
    }


}
