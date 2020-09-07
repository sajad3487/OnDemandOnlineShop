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
            ->when(isset($filter) && $filter =="promotional1", function ($q) use ($filter) {
            $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="promotional2", function ($q) use ($filter) {
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
            ->when(isset($filter) && $filter =="banner_1", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->when(isset($filter) && $filter =="banner_2", function ($q) use ($filter) {
                $q->where('type', $filter);
            })
            ->first();
    }

}
