<?php


namespace App\Service;


use App\Repositories\categoryRepository;

class categoryService
{
    /**
     * @var categoryRepository
     */
    private $categoryRepo;

    public function __construct(
        categoryRepository $categoryRepository
    )
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function getCategoryById($id){
        return $this->categoryRepo->getById($id);
    }

    public function getAllCategories(){
        return $this->categoryRepo->getAllCategories();
    }

    public function deleteAllSubCat ($type,$id){
        if ($type == 'grandChild'){
            $this->categoryRepo->delete($id);
        }elseif ($type == 'child'){
            $this->categoryRepo->deleteChild($id);
            $this->categoryRepo->delete($id);
        }elseif ($type == 'category'){
            $data = $this->categoryRepo->getChild($id)->toArray();
            foreach ($data as $key =>$cat){
                $subCat[$cat['id']] = $cat['title'];
            }
            foreach ($data as $key =>$subCat){
                $childId = $subCat['id'];
                $this->categoryRepo->deleteChild($childId);
            }
            $this->categoryRepo->deleteChild($id);
            $this->categoryRepo->delete($id);
        }
    }

    public function createNewCategory ($data){
        return $this->categoryRepo->create($data);
    }

    public function getSubCategory ($category_id){
        return $this->categoryRepo->getChild($category_id)->toArray();
    }
}
