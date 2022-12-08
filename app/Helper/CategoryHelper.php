<?php

namespace App\Helper;

use App\Models\Category;

class CategoryHelper
{
    public function findCategories()
    {
        $categoriesList = Category::all();
        return view('incs.navbar', [
            'categoriesList' => $categoriesList
        ]);
    }
}
