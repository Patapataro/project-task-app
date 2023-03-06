@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="mx-auto w-4/5 shadow-xl">
        <!-- Create a project section -->
        @livewire('create-project')

        <!-- View and edit tasks section -->
        <div class="p-6 border-b border-gray-300">
            <h2 class="text-xl mb-4">Tasks</h2>
            <div class="flex pb-4 mx-4">
                <div class="border-b border-gray-300 inline-block w-full">
                    <input type="text" placeholder="New Task" class="w-full border-none">
                </div>
                <button class="px-4 py-2 border-b border-gray-300 bg-blue-500 shadow-md text-white">ADD</button>
            </div>

            @livewire('select-project')


            <ul class=" mx-auto">
                <li class="p-2 border flex justify-between border-gray-300"><span>Task one</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li>
                <li class="p-2 border flex justify-between border-gray-300"><span>Task Two</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li>
            </ul>
        </div>
    </div>
</div>

@endsection
