<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('pages.admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('pages.admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $categoryData = $request->validated();

        $categoryData['slug'] = Str::of($request->name)->slug('-');

        Category::create($categoryData);

        return redirect(route('admin.category.index'))
            ->with('success', 'Kategori berhasil dibuat');
    }

    public function show()
    {
    }

    public function edit(string $slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('pages.admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, $slug)
    {
        $updateCategoryData = $request->validated();

        $category = Category::where('slug', $slug)->first();

        $category->name = $updateCategoryData['name'];
        $category->slug = Str::of($updateCategoryData['name'])->slug('-');
        $category->save();

        return redirect(route('admin.category.index'));
    }

    public function destroy(string $slug)
    {
        $category = Category::where('slug', $slug)->first();

        $category->delete();

        return back();
    }
}
