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

    public function show(Categories $category) : View {
        return view('app.categories.show', [
            'tracks' => $category->tracks()->withCount('likes')->orderBy('likes_count', 'desc')->paginate(10),
            'category' => $category
        ]);
    }
}
