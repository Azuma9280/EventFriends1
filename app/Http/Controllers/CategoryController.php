<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\carbon;

class CategoryController extends Controller
{
    public function category(Category $category )
    {
        $category_name = Category::find($id);
        return view('threads/category')->with(['category' => $category->get()]);
    }
}
