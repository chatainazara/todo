<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Category;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::with('category2')->get();
        // dd($todos);
        $categories= Category::select('id','name')->get();
        // dd($cate1);
        return view('index',['todos'=>$todos,
                            'default'=>'',
                            'categories'=>$categories,
                            ]);
    }

    public function store(TodoRequest $request){
        $todoAll=$request->all();
        $catetext=Category::find($todoAll['cate11']);
        Todo::create([
            'content'=> $todoAll['xx'],
            'category_id'=>$catetext['id']
            ]);
        return redirect('/')->with('message','Todoを作成しました');
    }

    public function updateORremove(Request $request){
        // dd($request);
        if($request->has('update')){
            $form2=$request->only('inputcontent','category_id7');
            // dd($form2);
            // $cate12=Category::where('name',$form2['category_name'])->first();
            // dd($cate12);
            unset($form2['_token']);
            Todo::find($request->id2)->update([
            'content'=>$form2['inputcontent'],
            'category_id'=>$form2['category_id7']
            ]);
        return redirect('/')->with('message','Todoを更新しました');
        }

        elseif($request->has('remove')){
            Todo::find($request->id2)->delete();
            return redirect('/')->with('message','Todoを削除しました');
        }
    }

    public function search(Request $request)
    {
        $s=$request->all();
        // dd($s);
        $todos = Todo::with('category2')->KeywordSearch($request->keyword)->CategorySearch($request->category_id6)->get();
        $categories = Category::all();
        $default='';
        return view('index',compact('todos','categories','default'));
    }


}
