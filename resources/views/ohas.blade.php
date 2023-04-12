@extends('layouts.home')
@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Заголовок блока</h1>
            <p class="text-gray-600">Это пример блока с контентом, оформленным с использованием Tailwind CSS.</p>
            <ul class="mt-4">
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h1v5a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a1 1 0 0 0-1-1H3zm4 2h10v1H7V5zm0 3h10v1H7V8zm0 3h10v1H7v-1z" />
                    </svg>
                    <span class="text-gray-700">Пункт списка 1</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h1v5a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a1 1 0 0 0-1-1H3zm4 2h10v1H7V5zm0 3h10v1H7V8zm0 3h10v1H7v-1z" />
                    </svg>
                    <span class="text-gray-700">Пункт списка 2</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h1v5a2 2 0   0 0 2 2h11a2 2 0 0 0 2-2V4a1 1 0 0 0-1-1H3zm4 2h10v1H7V5zm0 3h10v1H7V8zm0 3h10v1H7v-1z" />
                    </svg>
                    <span class="text-gray-700">Пункт списка 3</span>
                </li>
            </ul>
            <button class="mt-6 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Кнопка
            </button>
        </div>
    </div>
@endsection
