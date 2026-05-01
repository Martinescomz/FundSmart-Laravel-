<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create(){
        return view('category.createCategory');
    }

    public function store(Request $request){
        $userId = Auth::id();

        $category = new Category;

        $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|numeric',
    ]);

        $category->name = $request->name;
        $category->type = $request->type;
        $category->user_id = $userId;

        $category->save();
        
        return redirect()->intended(route('movement.create', absolute: false));
    }
}
