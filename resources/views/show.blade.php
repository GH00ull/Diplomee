@extends('layouts.home')
@section('content')
    @foreach ($card as $item)
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ Vite::asset('../../public/images/') }}{{ $item->img }}" alt="Изображение товара" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $item->name }}</h3>
                <p class="text-gray-700 mb-4">{{ $item->opis }}</p>
                <p class="text-gray-700 mb-4">{{ $item->prise }}</p>
                <div class="flex justify-between items-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">
                        Купить
                    </button>
                    <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Забронировать
                    </button>
                </div>
            </div>
        </div>
    @endforeach
@endsection
