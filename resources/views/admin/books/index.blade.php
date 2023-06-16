@extends('admin.layout.admin')
@section('title', 'Список книг')

@section('content')
@auth('admin')
<a href="{{ route('books.create') }}" class="block bg-green-400 hover:bg-green-600 text-white text-lg m-10 p-3 rounded w-52 text-center">Добавить книгу</a>
@endauth
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center text-gray-500 p-10">
        <thead>
            <tr class="border-b">
                <td>id</td>
                <td>Обложка</td>
                <td>Название</td>
                <td>Автор</td>
                <td>Издательство</td>
                <td>Год издания</td>
                <td>ISBN</td>
                <td>Наличие</td>
                <td>Действие</td>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $loop->index+1 }}
                </th>
                <td>
                    <img src="{{ $book->cover }}" alt="" srcset="">
                </td>
                <td class="px-6 py-4">
                    {{ $book->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $book->author->name }}
                </td>
                <td>
                    {{ $book->publishing_house }}
                </td>
                <td>
                    {{ $book->year_of_publishing }}
                </td>
                <td>
                    {{ $book->isbn }}
                </td>
                @if ($book->availability == 1)
                <td>
                    Да
                </td>
                @else
                <td>
                    Нет
                </td>
                @endif
                <td>
                    @auth('admin')
                    <form action="{{ route('books.destroy', $book) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="block bg-red-400 hover:bg-red-600 text-white text-lg mx-auto p-3 rounded">Удалить</button>
                    </form>
                    @elseauth('user')
                    <button class="block bg-red-400 hover:bg-red-600 text-white text-lg mx-auto p-3 rounded">Удалить</button>
                    @endauth
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection