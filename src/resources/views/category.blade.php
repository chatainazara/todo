@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

            @section('error')
            @if(session('message'))
            <div class="header__attention2">
                <a class="header__comments2">
                {{ session('message') }}
                </a>
            </div>
            @endif
            @endsection

        @section('content')
            @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}A</li>
                @endforeach
            </ul>
            @endif

        <form class="form" action="/category" method="POST">
        @csrf
            <span class="form__input-content">
                <input class="form__input-box" type="text" name="bb" value={{$aa}} />
            </span>
            <span class="form__button">
                <button class="form__button-submit" type="submit">作成</button>
            </span>
        </form>

        <div class="list">
            <div class="category__title">
            category
            </div>
            <ul class="list__category">
                @foreach($cate6 as $cate7)
                <form class="list__form" action="/category/updateORremove" method="POST">
                @method('PATCH')
                @csrf
                <li class="list__content-line">
                    <span class="list__category-text">
                        <input class="list__category-text--box" type="text" name="inputcategory" value="{{$cate7['name']}}" />
                        <input type="hidden" name="id3" value="{{ $cate7['id'] }}">
                    </span>
                    <span class="list__content-button">
                        <button class="list__content-button--update" type="submit" name="update">更新</button>
                        <button class="list__content-button--remove" type="submit" name="remove">削除</button>
                    </span>
                </li>
                </form>
                @endforeach
            </ul>
        </div>
        @endsection