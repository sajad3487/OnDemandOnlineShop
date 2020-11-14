<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageInfoRequest;
use App\Service\categoryService;
use App\Service\pageService;
use App\Service\productService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var pageService
     */
    private $pageService;
    /**
     * @var categoryService
     */
    private $categoryService;
    /**
     * @var productService
     */
    private $productService;

    public function __construct(
        pageService $pageService,
        categoryService $categoryService,
        productService $productService
    )
    {
        $this->pageService = $pageService;
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function firstPage()
    {
        $latestProduct = $this->productService->getLatestProduct(8);
        $popularProduct = $this->productService->getPopularProduct (8);
        $slider = $this->pageService->getPage("slider");
        $promotional1 = $this->pageService->getPage("promotional1");
        $promotional2 = $this->pageService->getPage("promotional2");
        $filtered_one = $this->pageService->getPage("filtered_one");
        $surprise = $this->pageService->getPage("surprise");
        $filtered_two = $this->pageService->getPage("filtered_two");
        $banner_1 = $this->pageService->getPage("banner_1");
        $banner_2 = $this->pageService->getPage("banner_2");
        $categories = $this->categoryService->getAllCategories();
        return view('dashboard.shop.index', compact('slider', 'promotional1', 'promotional2', 'filtered_one', 'surprise', 'filtered_two', 'banner_1', 'banner_2','categories','latestProduct','popularProduct'));
    }

    public function adminFirstPage()
    {
        $slider = $this->pageService->getPage("slider");
        $promotional1 = $this->pageService->getPage("promotional1");
        $promotional2 = $this->pageService->getPage("promotional2");
        $filtered_one = $this->pageService->getPage("filtered_one");
        $surprise = $this->pageService->getPage("surprise");
        $filtered_two = $this->pageService->getPage("filtered_two");
        $banner_1 = $this->pageService->getPage("banner_1");
        $banner_2 = $this->pageService->getPage("banner_2");
        $categories = $this->categoryService->getAllCategories();
        return view('panel.shop.adminFirstPage', compact('slider', 'promotional1', 'promotional2', 'filtered_one', 'surprise', 'filtered_two', 'banner_1', 'banner_2','categories'));
    }

    public function updateFirstPage(PageInfoRequest $request)
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
