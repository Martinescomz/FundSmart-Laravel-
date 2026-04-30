<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function index(){
        return view('movement.menu');
    }

    public function create(){
        return view('movement.createMovement');
    }
    
    public function store(Request $request){
        $movement = new Movement;

        $userId = Auth::id();
        //dd($userId);
        $movement -> name = $request -> name;
        $movement -> description = $request -> description;
        $movement -> value = $request -> value;
        $movement -> data_movement = $request -> data_movement;
        $movement -> id_usuario = $userId;
        $movement -> category = $request -> category;

        $movement ->save();
        dd($movement);

    }
}
