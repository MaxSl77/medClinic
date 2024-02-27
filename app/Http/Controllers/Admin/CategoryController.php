<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $new_category = new Category();
        $new_category->title = $request->title;
        $new_category->save();

        return redirect()->back()->withSuccess('Категория была успешно добавлена');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->withSuccess('Категория была успешно обновлена');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->withSuccess('Категория была успешно удалена');
    }
}
