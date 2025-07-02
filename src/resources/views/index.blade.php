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
            <ul class="list__content">
                <form action="/" method="post">
                <li class="list__content-line">
                    <span class="list__content-text">
                        <input class="list__content-text--box" type="text" name="inputtext" value="a" />
                    </span>
                    <span class="list__content-button">
                        <button class="list__content-button--update" type="submit" name="update">更新</button>
                        <button class="list__content-button--remove" type="submit" name="remove">削除</button>
                    </span>
                </li>
                <li class="list__content-line">
                    <span class="list__content-text">
                        <input class="list__content-text--box" type="text" name="inputtext" value="a" />
                    </span>
                    <span class="list__content-button">
                        <button class="list__content-button--update" type="submit" name="update">更新</button>
                        <button class="list__content-button--remove" type="submit" name="remove">削除</button>
                    </span>
                </li>
                </form>
            </ul>
            @endsection