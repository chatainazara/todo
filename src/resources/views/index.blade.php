@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

            @section('error')
            @if(session('message'))
            <div class="header__attention">
                <a class="header__comments">
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

        <form class="form" action="/todos" method="POST">
        @csrf
            <span class="form__input">
                <input class="form__input-box" type="text" name="xx" value={{$yy}} />
            </span>
            <span class="form__button">
                <button class="form__button-submit" type="submit">作成</button>
            </span>
        </form>

        <div class="list">
            <div class="list__title">
                <h2>Todo</h2>
            </div>
            <ul class="list__content">
                <!-- <form action="/" method="patch"> -->
                @foreach($test as $todo)
                <form class="list__form" action="/todos/updateORremove" method="POST">
                @method('PATCH')
                @csrf
                <li class="list__content-line">
                    <span class="list__content-text">
                        <input class="list__content-text--box" type="text" name="inputtext" value="{{$todo['content']}}" />
                        <!-- value="{{$todo->content}}"でもOK -->
                        <input type="hidden" name="id2" value="{{ $todo['id'] }}">
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