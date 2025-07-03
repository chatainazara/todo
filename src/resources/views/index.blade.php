@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

            @section('error')
            <div class="header__attention">
                <a class="header__comments">
                Todoを作成しました
                </a>
            </div>
            @endsection

        @section('content')
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
                <form action="/" method="post">
                    @foreach($test as $todo)
                <li class="list__content-line">
                    <span class="list__content-text">
                        <input class="list__content-text--box" type="text" name="inputtext" value="{{$todo['content']}}" />
                        <!-- value="{{$todo->content}}"でもOK -->
                    </span>
                    <span class="list__content-button">
                        <button class="list__content-button--update" type="submit" name="update">更新</button>
                        <button class="list__content-button--remove" type="submit" name="remove">削除</button>
                    </span>
                </li>
                    @endforeach
                </form>
            </ul>
        </div>
        @endsection