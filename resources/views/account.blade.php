@extends('admin.layout.admin')
@section('title', 'Список категорий книг')

@section('content')

<div>
    <div class="mx-auto px-96 pt-10">
        <div class="">
            <h1 class="text-2xl font-bold">{{ auth('web')->user()->name }} {{ auth('web')->user()->last_name }}</h1>
            <h1 class="text-2xl">Email: {{ auth('web')->user()->email }}</h1>
        </div>
        <div class="mx-auto text-center pt-5 text-gray-900 text-2xl font-bold">
            <h1>Ваша аренда:</h1>
        </div>
        <div class="cards mt-10 flex space-x-5 mx-auto">
            <div class="card">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:border-gray-200 ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Книга</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-700">Арендовано до: 12.02.2007</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:border-gray-200 ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Книга</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-700">Арендовано до: 12.02.2007</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                    </a>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection