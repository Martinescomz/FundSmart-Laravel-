<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $movement = Movement::where('user_id', $userId)->get();
        return view('movement.dashboard', ['allMovement' => $movement]);
    }

    public function create(){
        $userId = Auth::id();
        
        $category = Category::where('user_id', $userId)->get(); 

        return view('movement.createMovement', ['allCategory' => $category]);
    }
    
    public function store(Request $request){
        $movement = new Movement;

        $request->validate([
        'name' => 'required|string|max:255',
        'value' => 'required|numeric',
        'date_movement' => 'required|date',
        'category' => 'required|exists:categories,id'
    ]);

        $userId = Auth::id();
        //dd($userId);
        $movement -> name = $request -> name;
        $movement -> description = $request -> description;
        $movement -> value = $request -> value;
        $movement -> date_movement = $request -> date_movement;
        $movement -> user_id = $userId;
        $movement -> id_category = $request -> category;
        //dd($movement);
        $movement ->save();

        return redirect('/dashboard');

        

    }
}
