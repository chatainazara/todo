<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function cate_index(){
        $cate5=Category::all();
        return view('category',[
            'cate6'=>$cate5,
            'aa'=>'同一ワード不可',
        ]);
    }

    public function cate_store(Request $request){
        $cate=$request['bb'];
        // dd($cate);
        Category::create([
            'name'=>$cate,
        ]);
        return redirect('/category')->with('message','カテゴリを作成しました');
    }

    public function cate_updateORremove(Request $request){
        if($request->has('update')){
            // dd($request);
            $cate8=$request->only('inputcategory','id3');
            // dd($cate8);
            Category::find($cate8['id3'])->update([
            'name'=>$cate8['inputcategory'],
            ]);
            return redirect('/category')->with('message','カテゴリを更新しました');
        }elseif($request->has('remove')){
            $cate9=$request->only('id3');
            Category::find($cate9['id3'])->delete();
            return redirect('/category')->with('message','カテゴリを削除しました');
        }
    }
}
