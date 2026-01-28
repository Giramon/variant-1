<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Бронь тура
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ $tour->title }}</p>
                    <p>Дата тура {{ $tour->date }}</p>
                    <form action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                        <div>
                            <x-input-label for="count" :value="__('Количество участников')" />
                            <x-text-input id="count" class="block mt-1 w-full" type="number" name="count" :value="old('count')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('count')" class="mt-2" />
                        </div>
                        <x-primary-button class="ms-3">
                            {{ __('Забронировать') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
