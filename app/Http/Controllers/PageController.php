<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageInfoRequest;
use App\Service\pageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var pageService
     */
    private $pageService;

    public function __construct(
        pageService $pageService
    )
    {
        $this->pageService = $pageService;
    }

    public function firstPage()
    {
        $slider = $this->pageService->getPage("slider");
        $promotional = $this->pageService->getPage("promotional");
        $filtered_one = $this->pageService->getPage("filtered_one");
        $surprise = $this->pageService->getPage("surprise");
        $filtered_two = $this->pageService->getPage("filtered_two");
        $banner = $this->pageService->getPage("banner");
        return view('panel.shop.adminFirstPage', compact('slider','promotional','filtered_one','surprise','filtered_two','banner'));
    }

    public function updateSlider(PageInfoRequest $request)
    {
        $data = $request->all();
        if (isset($request->file)) {
            $data['media_path'] = $this->uploadPicture($request);
        }
        unset($data['file']);
        if (isset($data['status']) && $data['status']) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }
        $id = $this->pageService->getPage($data['type'])->id;
        $this->pageService->update($data, $id);
        return back();
    }

    public function uploadPicture($request)
    {
        $destination = base_path() . '/public/firstPage/';
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('file');
        $newFileName = $filename . $request->file->getClientOriginalName();
        $file->move($destination, $newFileName);
        return '/firstPage/' . '/' . $newFileName;
    }
}
