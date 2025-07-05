<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Category;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        // dd($todos);
        // return view('index',['yy'=>'あざネギ']);
        // return view('index',compact('todos'));
        return view('index',['test'=>$todos,
                            'yy'=>'**TeSt**',
                            'ww'=>'カテゴリ']);
    }

    public function store(TodoRequest $request){
        // dd($request);
        $todo=$request['xx'];
        $cate=$request['zz'];
        // $todo=$request->only(['xx']);
        // dd($todo);
        // $todo2=$todo['xx'];
        // $category3=Category::find
        Todo::create([
            'content'=> $todo,
            // 'name'=> $cate,
            // 'category_id'=>'1'
        ]);
        return redirect('/')->with('message','Todoを作成しました');
    }

    public function updateORremove(Request $request){
        // dd($request);
        if($request->has('update')){
            $form2=$request->all();
            unset($form2['_token']);
            Todo::find($request->id2)->update([
            'content'=>$form2['inputcontent']
            ]);
        return redirect('/');
        }

        elseif($request->has('remove')){
            Todo::find($request->id2)->delete();
            return redirect('/')->with('message','Todoを削除しました');
        }
    }


}
