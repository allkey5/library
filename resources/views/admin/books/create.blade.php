@extends('admin.layout.admin')
@section('title', 'Добавить книгу')

@section('content')
@auth('admin')

<div class="flex justify-center items-center w-full bg-gray-50">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold ">Register</h1>
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Название</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="first_name">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Автор</label>
                <select name="author_id" class="border py-2 px-3 text-grey-800">
                    <option value=""></option>
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="pub">Издательство</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="publishing_house" id="pub">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="puby">Год издания</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="year_of_publishing" id="puby">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="isbn">ISBN</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="isbn" id="isbn">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="cover">Обложка</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="cover" id="cover">
            </div>
            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Создать</button>
        </form>
    </div>
</div>
@endauth
@endsection