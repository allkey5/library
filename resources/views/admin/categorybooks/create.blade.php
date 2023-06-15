@extends('admin.layout.admin')
@section('title', 'Добавить категорию к книге')

@section('content')
@auth('admin')

<div class="flex justify-center items-center h-screen w-full bg-gray-50">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <form action="{{ route('categorybooks.store') }}" method="post">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Категория</label>
                    <select name="category_id" class="border py-2 px-3 text-grey-800">
                        <option value=""></option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Категория</label>
                    <select name="book_id" class="border py-2 px-3 text-grey-800">
                        <option value=""></option>
                        @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Создать</button>
            </form>
        </div>
    </div>
@endauth
@endsection