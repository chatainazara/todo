<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        return view('index');
    }
}
