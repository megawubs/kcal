<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foods') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('message'))
                <div class="bg-green-200 border-2 border-green-600 p-2 mb-2">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($foods as $food)
                            <div class="p-2 font-light rounded-lg border-2 border-gray-200">
                                <div class="text-2xl lowercase">
                                        {{ $food->name }}@if($food->detail), <span class="text-gray-500">{{ $food->detail }}</span>@endif
                                </div>
                                @if($food->brand)
                                    <div class="text-xl text-gray-600">
                                        {{ $food->brand }}
                                    </div>
                                @endif
                                <div class="font-bold">
                                    Serving size {{ $food->serving_size }}
                                    {{ $food->serving_unit }}
                                    ({{ $food->serving_weight }}g)
                                </div>
                                <div class="grid grid-cols-2 text-sm border-t-8 border-black pt-2">
                                    <div class="col-span-2 text-xs font-bold">Amount per serving</div>
                                    <div class="font-extrabold text-lg border-b-4 border-black">Calories</div>
                                    <div class="font-extrabold text-right text-lg border-b-4 border-black">{{$food->calories}}</div>
                                    <div class="font-bold border-b border-gray-300">Fat</div>
                                    <div class="text-right border-b border-gray-300">{{ $food->fat < 1 ? $food->fat * 1000 . "m" : $food->fat }}g</div>
                                    <div class="font-bold border-b border-gray-300">Cholesterol</div>
                                    <div class="text-right border-b border-gray-300">{{ $food->cholesterol < 1 ? $food->cholesterol * 1000 . "m" : $food->cholesterol }}g</div>
                                    <div class="font-bold border-b border-gray-300">Sodium</div>
                                    <div class="text-right border-b border-gray-300">{{ $food->sodium < 1 ? $food->sodium * 1000 . "m" : $food->sodium }}g</div>
                                    <div class="font-bold border-b border-gray-300">Carbohydrates</div>
                                    <div class="text-right border-b border-gray-300">{{ $food->carbohydrates < 1 ? $food->carbohydrates * 1000 . "m" : $food->carbohydrates }}g</div>
                                    <div class="font-bold">Protein</div>
                                    <div class="text-right">{{ $food->protein < 1 ? $food->protein * 1000 . "m" : $food->protein }}g</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
