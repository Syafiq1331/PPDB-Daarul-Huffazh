<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::with('category')->paginate(5);
        return view('pages.admin.subCategory.index', compact('subcategories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.subCategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories,name',
            'category_id' => 'required|exists:categories,id'
        ]);

        SubCategory::create($request->all());

        return redirect()->route('sub-category.index')
            ->with('success', 'Sub-category created successfully.');
    }

    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.subCategory.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories,name,' . $id,
            'category_id' => 'required|exists:categories,id'
        ]);

        $subcategory = SubCategory::findOrFail($id);
        $subcategory->update($request->all());

        return redirect()->route('sub-category.index')
            ->with('success', 'Sub-category updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('sub-category.index')
            ->with('success', 'Sub-category deleted successfully.');
    }
}
