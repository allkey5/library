@extends('admin.layout.admin')
@section('title', 'Добавить пользователя')

@section('content')
@auth('admin')

    <div class="flex justify-center items-center w-full bg-gray-50">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="post">
                @csrf
                @isset($user)
                @method('PATCH')
                @endisset
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="name">Имя</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="first_name" value="{{ old('name', isset($user) ? $user->name : '') }}">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Фамилия</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{ old('last_name', isset($user) ? $user->last_name : '') }}">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email" value="{{ old('email', isset($user) ? $user->email : '') }}">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="pass">Пароль</label>
                    <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="pass">
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Создать</button>
            </form>
        </div>
    </div>
@endauth
@endsection