@extends('layouts.home')
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <form class="bg-white shadow-md rounded px-9 pt-10 pb-8 mb-2" action="{{ route('creates') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product-name">
                    Название товара
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="product-name" type="text" id="name" name="name" placeholder="Введите название товара"
                    required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product-description">
                    Описание товара
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-24 resize-none"
                    id="product-description" id="opis" name="opis" placeholder="Введите описание товара" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product-price">
                    Цена товара
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="product-price" type="number" step="0.01" id="price" name="price"
                    placeholder="Введите цену товара" required />
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product-price">
                    Сылка на товар
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="link" name="link" step="0.01" placeholder="где купить" required />
            </div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="product-price">
                Картинка
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="file" id="image" name="image" required step="0.01" required />
    </div>
    <div class="flex items-center justify-between">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">
            Добавить товар
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Отмена
        </a>
    </div>
    </form>
    </div>
@endsection
