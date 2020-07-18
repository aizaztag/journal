<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Category::paginate(10);
        return view('frontend.index' , compact('users'));
    }

    public function journal()
    {
        $journals = Category::all()->toArray();
        return view('frontend.journal' , compact('journals'));
    }

   public function category(Category $category)
    {
        return view('frontend.test', ['category' => $category->toArray()]);
    }
}
