<?php

namespace App\Traits\Blast\Category;

/* Models */
use App\Models\Blast\Category;

use DB;

trait CategoryCollection
{
    public function __construct()
    {
        $this->CategoryModel = Category::class;
        $this->CategoryTable = getTable($this->CategoryModel);
    }

    public function GetCategoryDetails($Categories)
    {
        $CategoryID = $Categories->pluck('id');

        $Categories->map(function($Category) {
            return $Category;
        });
        return $Categories;
    }

}
