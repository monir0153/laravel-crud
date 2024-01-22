<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Offer') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" text-gray-900 dark:text-gray-100">
                    <a href="{{route('offers.create')}}" class="px-3 py-2 bg-green-600 rounded text-white hover:shadow-md duration-300">create</a>
                </div>
            <div class="bg-white mt-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    {{__('datatable')}}
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>