<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <main>
        <header class="header">
            <div class="header__inner">
                <a class="header__logo" href="/">
                Todo
                </a>
                <a class="category__button" href="/category">
                カテゴリー一覧
                </a>
            </div>
        <!-- アテンション with messageの表示　-->
        @if(session('message'))
        <div class="header__attention green">
                <a class="header__comments">
                {{ session('message') }}
                </a>
        </div>
        @endif
        <!-- バリデーション -->
        @if (count($errors) > 0)
            <ul class="header__attention red">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
        </header>

        @yield('content')
    </main>
</body>
</html>