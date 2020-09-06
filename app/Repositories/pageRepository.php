<?php


namespace App\Repositories;


use App\DesignPatterns\Repository;
use App\page;

class pageRepository extends Repository
{
    public function __construct()
    {
        $this->model = new page();
    }

    public function getPageInfo ($filter){
        return page::when(isset($filter) && $filter =="slider", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="promotional", function ($q) use ($filter) {
            $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="filtered_one", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="surprise", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="filtered_two", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="banner", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->first();
    }

}
