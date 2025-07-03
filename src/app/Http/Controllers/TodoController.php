<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        // dd($todos);
        // return view('index',['yy'=>'あざネギ']);
        // return view('index',compact('todos'));
        return view('index',['test'=>$todos,
    'yy'=>'**TeSt**']);
    }

    public function store(Request $request){
        // dd($request);
        $todo=$request['xx'];
        // $todo=$request->only(['xx']);
        // dd($todo);
        // $todo2=$todo['xx'];
        Todo::create([
            'content'=> $todo
        ]);
        return redirect('/');
    }
}
