<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Contracts\View\View;

class CategoriesController
{
    public function categories() : View {
        return view('app.categories.index', [
            'categories' => Categories::all()
        ]);
    }

    public function show($category) : View {

        return view('app.categories.show', [
            'category' => $category
        ]);
    }
}
