@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

        @section('content')
        <!-- カテゴリの追加 -->
        <form class="form" action="/category" method="POST">
        @csrf
            <span class="form__input-content">
                <input class="form__input-box" type="text" name="bb" value="{{$aa}}" />
            </span>
            <span class="form__button">
                <button class="form__button-submit" type="submit">作成</button>
            </span>
        </form>

        <!-- リストの表示 -->
        <!-- リストのタイトル -->
        <div class="list">
            <div class="list__title--category">
            category
            </div>
            <!-- リストの中身 -->
            <ul class="list__column">
                @foreach($cate6 as $cate7)
                <form class="list__column-form" action="/category/updateORremove" method="POST">
                @method('PATCH')
                @csrf
                <li class="list__column-line">
                    <span class="list__column-category">
                        <input class="list__column-category--textbox" type="text" name="inputcategory" value="{{$cate7['name']}}" />
                        <input type="hidden" name="id3" value="{{ $cate7['id'] }}">
                    </span>
                    <!-- ボタン部分 -->
                    <span class="list__column-button">
                        <button class="list__column-button--update" type="submit" name="update">更新</button>
                        <button class="list__column-button--remove" type="submit" name="remove">削除</button>
                    </span>
                </li>
                </form>
                @endforeach
            </ul>
        </div>
        @endsection