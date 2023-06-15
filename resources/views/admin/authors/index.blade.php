@extends('admin.layout.admin')
@section('title', 'Добавить автора')

@section('content')
@auth('admin')

<a href="{{ route('authors.create') }}" class="block bg-green-400 hover:bg-green-600 text-white text-lg m-10 p-3 rounded w-52 text-center">Добавить автора</a>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center text-gray-500 p-10">
        <thead>
            <tr class="border-b">
                <td>id</td>
                <td>Имя</td>
                <td>Действие</td>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $loop->index+1 }}
                </th>
                <td class="px-6 py-4">
                    {{ $author->name }}
                </td>
                <td>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="block bg-red-400 hover:bg-red-600 text-white text-lg mx-auto p-3 rounded">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endauth
@endsection