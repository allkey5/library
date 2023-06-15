<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex justify-center text-gray-800">
        <a href="{{ route('authors.index') }}" class="px-4 py-2">Авторы</a>
        <a href="{{ route('users.index') }}" class="px-4 py-2">Пользователи</a>
        <a href="{{ route('books.index') }}" class="px-4 py-2">Книги</a>
        <a href="{{ route('categories.index') }}" class="px-4 py-2">Категории</a>
        <a href="{{ route('categorybooks.index') }}" class="px-4 py-2">Категории книг</a>
        @auth('admin')
        <a href="{{ route('account', auth('admin')->user()) }}" class="px-4 py-2">
            {{ auth('admin')->user()->name ?? 'Guest' }}
        </a>
        <a href="{{ route('logout') }}" class="px-4 py-2">Выйти</a>
        @elseauth('web')
        <a href="{{ route('account', auth('web')->user()->id) }}" class="px-4 py-2">
            {{ auth('web')->user()->name ?? 'Guest' }}
        </a>
        <a href="{{ route('logout') }}" class="px-4 py-2    ">Выйти</a>
        @else
        <a href="{{ route('login') }}" class="px-4 py-2">Войти</a>
        @endauth
    </div>

    <div class="main">
        @yield('content')
    </div>
</body>

</html>