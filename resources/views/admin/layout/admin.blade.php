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
        <a href="{{ route('books.page') }}" class="px-4 py-2">Книги</a>
        @auth('admin')
        <p class="px-4 py-2">
            {{ auth('admin')->user()->name ?? 'Guest' }}
        </p>
        <a href="{{ route('logout') }}" class="px-4 py-2">Выйти</a>
        @elseauth('user')
        <a href="{{ route('account', auth('user')->user()->id) }}" class="px-4 py-2">
            {{ auth('user')->user()->name ?? 'Guest' }}
        </a>
        <a href="{{ route('logout') }}" class="px-4 py-2">Выйти</a>
        @else
        <a href="{{ route('login') }}" class="px-4 py-2">Вход</a>
        @endauth
    </div>

    <div class="main">
        <div class="flex justify-center text-gray-800">
            @auth('admin')
            <a href="{{ route('authors.index') }}" class="px-4 py-2">Авторы</a>
            <a href="{{ route('users.index') }}" class="px-4 py-2">Пользователи</a>
            <a href="{{ route('books.index') }}" class="px-4 py-2">Книги</a>
            <a href="{{ route('categories.index') }}" class="px-4 py-2">Категории</a>
            <a href="{{ route('categorybooks.index') }}" class="px-4 py-2">Категории книг</a>
            @endauth
        </div>
        @yield('content')
    </div>
</body>

</html>