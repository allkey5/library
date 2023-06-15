@extends('admin.layout.admin')
@section('title', 'Вход')
@section('content')
<div class="flex flex-col items-center justify-center px-6 py-1 mx-auto mt-14 lg:py-0">
    <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-300 dark:border-gray-200">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <div class="flex space-x-44">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-gray-600">
                    Вход
                </h1>
                <a href="{{ route('register') }}" class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-gray-600">
                    Регистрация
                </a>
            </div>
            <form class="space-y-4 md:space-y-6" action="{{ route('login_form') }}" method="post">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium  dark:text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 sm:text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-400 dark:placeholder-gray-800 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-700">Пароль</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 sm:text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-400 dark:placeholder-gray-800 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-gray-700">Забыли пароль?</a>
                </div>
                <button type="submit" class="w-full text-white block bg-green-600 hover:bg-green-800 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Войти</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    <a href="#" class="font-medium text-primary-600 hover:underline dark:text-gray-700">Регистрация</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection