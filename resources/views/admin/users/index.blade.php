@extends('admin.layout.admin')
@section('title', 'Список пользователей')

@section('content')
@auth('admin')

<a href="{{ route('users.create') }}" class="block bg-green-400 hover:bg-green-600 text-white text-lg m-10 p-3 rounded w-56 text-center">Добавить пользователя</a>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center text-gray-500 p-10">
        <thead>
            <tr class="border-b">
                <td>id</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Email</td>
                <td>Действие</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $loop->index+1 }}
                </th>
                <td class="px-6 py-4">
                    <a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a>
                </td>
                <td class="px-6 py-4">
                    {{ $user->last_name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    <form action="{{ route('users.destroy', $user) }}" method="post">
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