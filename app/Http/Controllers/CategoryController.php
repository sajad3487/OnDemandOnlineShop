<?php

namespace App\Http\Controllers;

use App\Http\Requests\ajaxCategoryRequest;
use App\Http\Requests\categoryRequest;
use App\Service\categoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var categoryService
     */
    private $categoryService;

    public function __construct(
        categoryService $categoryService
    )
    {
        $this->categoryService = $categoryService;
    }

    public function index (){
        $categories = $this->categoryService->getAllCategories();
        return view('panel.shop.category.index',compact('categories'));
    }

    public function destroy (categoryRequest $request,$category_id) {
        $this->categoryService->deleteAllSubCat($request->type,$category_id);
        return redirect('admin/shop/category');
    }
    public function store (categoryRequest $request){
        $data = $request->all();
        if ($request->parent_id == null){
            $data['parent_id'] = 0;
        }
        $this->categoryService->createNewCategory($data);
        return back();
    }

    public function subCategory (ajaxCategoryRequest $request){
        $data =  $this->categoryService->getSubCategory($request->categoryId);
        foreach ($data as $key =>$cat){
            $subCat[$cat['id']] = $cat['title'];
        }
        return $subCat;
    }
}
