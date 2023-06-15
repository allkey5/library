@extends('admin.layout.admin')
@section('title', 'Список категорий книг')

@section('content')
@auth('admin')

    <a href="{{ route('roles.create') }}" class="block bg-green-400 hover:bg-green-600 text-white text-lg m-10 p-3 rounded w-52 text-center">Добавить категорию</a>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center text-gray-500 p-10">
            <thead>
                <tr class="border-b">
                    <td>id</td>
                    <td>Пользователь</td>
                    <td>Роль</td>
                    <td>Действие</td>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $role->user_id }}</td>
                    <td>{{ $role->role_id }}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
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