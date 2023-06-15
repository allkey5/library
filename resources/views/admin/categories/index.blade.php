@extends('admin.layout.admin')
@section('title', 'Список категорий')

@section('content')
@auth('admin')

    <a href="{{ route('categories.create') }}" class="block bg-green-400 hover:bg-green-600 text-white text-lg m-10 p-3 rounded w-52 text-center">Добавить категорию</a>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center text-gray-500 p-10">
            <thead>
                <tr class="border-b">
                    <td>id</td>
                    <td>Название</td>
                    <td>Родительская категория</td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $loop->index+1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($category->parent) ? $category->parent->name : 'Без категории' }}
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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