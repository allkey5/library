@extends('admin.layout.admin')
@section('title', 'Добавить категорию к книге')

@section('content')
@auth('admin')

<div class="flex justify-center items-center h-screen w-full bg-gray-50">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <form action="{{ route('roles.store') }}" method="post">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Пользователь</label>
                    <select name="user_id" class="border py-2 px-3 text-grey-800">
                        <option value=""></option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Роль</label>
                    <select name="role_id" class="border py-2 px-3 text-grey-800">
                        <option value=""></option>
                        <option value="0">Не админ</option>
                        <option value="1">Админ</option>
                    </select>
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Создать</button>
            </form>
        </div>
    </div>
@endauth
@endsection