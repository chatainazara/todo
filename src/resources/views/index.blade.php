@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

        @section('content')
        <!-- todoの追加 -->
        <form class="form" action="/todos" method="POST">
        @csrf
            <h2 class="form__title">新規作成</h2>
            <!-- todo部分 -->
            <span class="form__input-content">
                <input class="form__input-box" type="text" name="xx" value="{{$default}}" />
            </span>
            <!-- カテゴリー部分 -->
            <select class="form__input-category" name="cate11">
                <option value="aaa" ></option>
                @foreach($categories as $category)
                <option value="{{$category['id']}}" >{{$category['name']}}</option>
                @endforeach
            </select>
            <span class="form__button">
                <button class="form__button-submit" type="submit">作成</button>
            </span>
        </form>

        <!-- 検索 -->
        <form class="form" action="/todos/search" method="get">
        @csrf
            <!-- todo部分 -->
            <h2 class="form__title">Todo検索</h2>
            <span class="form__input-content">
                <input class="form__input-box" type="text" name="keyword" value="{{ old('keyword') }}" />
            </span>
            <!-- Category部分 -->
            <select class="form__input-category" name="category_id6">
                <option value="aaa" ></option>
                @foreach($categories as $category)
                <option value="{{$category['id']}}" >{{$category['name']}}</option>
                @endforeach
            </select>
            <!-- ボタン部分 -->
            <span class="form__button">
                <button class="form__button-submit" type="submit">検索</button>
            </span>
        </form>

        <!-- リスト -->
        <!-- リストのタイトル -->
        <div class="list">
            <span class="list__title--content">
            Todo
            </span><!-- つなぎ
            --><span class="list__title--category">
            Category
            </span>
            <!-- リストの中身 -->
            <ul class="list__column">
                @foreach($todos as $todo)
                <form class="list__column-form" action="/todos/updateORremove" method="POST">
                @method('PATCH')
                @csrf
                <li class="list__column-line">
                    <!-- Todo部分 -->
                    <span class="list__column-content">
                        <input class="list__column-content--textbox" type="text" name="inputcontent" value="{{$todo['content']}}" />
                        <input type="hidden" name="id2" value="{{ $todo['id'] }}">
                    </span>
                    <!-- Category部分 -->
                    <select class="list__column-category" name="category_id7">
                    <option value="{{$todo->category2->id}}" >初期：{{$todo->category2->name}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category['id']}}" >{{$category['name']}}</option>
                    @endforeach
                    </select>
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