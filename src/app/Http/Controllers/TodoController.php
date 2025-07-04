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

    public function store(TodoRequest $request){
        // dd($request);
        $todo=$request['xx'];
        // $todo=$request->only(['xx']);
        // dd($todo);
        // $todo2=$todo['xx'];
        Todo::create([
            'content'=> $todo
        ]);
        return redirect('/')->with('message','Todoを作成しました');
    }

    public function updateORremove(Request $request){
        // dd($request);
        if($request->has('update')){
            $form2=$request->all();
            unset($form2['_token']);
            Todo::find($request->id2)->update([
            'content'=>$form2['inputtext']
            ]);
        return redirect('/');
        }

        elseif($request->has('remove')){
            Todo::find($request->id2)->delete();
            return redirect('/')->with('message','Todoを削除しました');
        }
    }
}
