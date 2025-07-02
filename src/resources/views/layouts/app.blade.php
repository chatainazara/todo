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
            </div>
            @yield('error')
        </header>
    
        <form class="form">
            <span class="form__input">
                <input class="form__input-box" type="text" name="todo_content" />
            </span>
            <span class="form__button">
                <button class="form__button-submit" type="submit">作成</button>
            </span>
        </form>

        <div class="list">
            <div class="list__title">
                <h2>Todo</h2>
            </div>

           @yield('content')
        </div>
    </main>
</body>
</html>