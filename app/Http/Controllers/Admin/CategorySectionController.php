<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategorySectionController extends Controller
{
    public function loadSections(Request $request)
    {
        $sections =  new Section();
        return response()->json($sections->availableSections($request->id));
    }

    public function categorySections(Request $request)
    {
        $category = Category::findOrFail($request->id);

        return response()->json($category->sections);
    }

    public function insertCategorySections(Request $request)
    {

        try {
            $section = Section::findOrFail($request->section_id);
            $category = Category::findOrFail($request->category_id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry for '.str_replace('App\\', '', $e->getModel()).' not found'], 404);
        }

        $category->sections()->attach($section);
        return response()->json(['new_sections' => $category->sections]);
    }

    public function deleteCategorySections(Request $request)
    {
        //return dd($request);
        $section = Section::find($request->section_id);
        $section->categories()->detach($request->category_id);
        return response()->json(['status' => 'success', 'message' => 'Product attribute deleted successfully.']);
    }
}
