<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(){
        return view('exepenses.menu');
    }

    public function create(){
        return view('exepenses.createMove');
    }
    
    public function store(){
        
    }
}
