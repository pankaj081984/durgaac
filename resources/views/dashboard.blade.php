<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

                <div class="text-right">
                    <button class="modal-open inline-flex items-center py-2 px-4 bg-red-400 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none place-items-end">Add Service Request</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
