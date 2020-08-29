<?php

namespace App\Http\Controllers;

use App\Http\Requests\ajaxCategoryRequest;
use App\Http\Requests\categoryRequest;
use App\Service\categoryService;
use App\Service\productService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var categoryService
     */
    private $categoryService;
    /**
     * @var productService
     */
    private $productService;

    public function __construct(
        categoryService $categoryService,
        productService $productService
    )
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('panel.shop.category.index', compact('categories'));
    }

    public function store(categoryRequest $request)
    {
        $data = $request->all();
        if ($request->parent_id == null) {
            $data['parent_id'] = 0;
        }
        $this->categoryService->createNewCategory($data);
        return back();
    }

    public function destroy(categoryRequest $request)
    {
        $this->categoryService->uncategorizedProductOfCategory($request->category_id);
        $this->categoryService->deleteAllSubCat($request->category_id);
        return redirect('admin/shop/category');
    }

    public function subCategory(ajaxCategoryRequest $request)
    {
        $data = $this->categoryService->getSubCategory($request->categoryId);
        foreach ($data as $key => $cat) {
            $subCat[$cat['id']] = $cat['title'];
        }
        return $subCat;
    }

    public function showProduct($category_id)
    {
        $products = $this->categoryService->getAllProductOfCategory($category_id);
        $category = $this->categoryService->getCategoryById($category_id);
        return view('panel.shop.category.indexCategoryProduct',compact('products','category'));
    }
}
