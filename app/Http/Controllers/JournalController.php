<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function __construct()
    {

    }

    public function journal()
    {
        $journals = Category::all()->toArray();
        return view('frontend.journal', compact('journals'));
    }

    public function category(Category $category)
    {
        return view('frontend.test', ['category' => $category->toArray()]);
    }
}
