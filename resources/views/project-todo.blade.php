@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="mx-auto w-4/5 shadow-xl">
        <!-- Create a project section -->
        <div class="px-6 py-8 border-b border-gray-300">
            <h2 class="text-xl mb-4">CREATE A PROJECT</h2>
            <div class="flex mx-4">
                <div class="border-b border-gray-300 inline-block w-full">
                    <input name="project-name" type="text" placeholder="New Project" class="w-full border-none">
                </div>
                <button class="px-4 py-2 border-b border-gray-300 bg-green-500 shadow-md text-white">CREATE</button>
            </div>
        </div>

        <!-- Select a project section -->
        <!-- <div class="p-6 border-b border-gray-300">
            <h2 class="text-xl mb-4">Project</h2>

        </div> -->

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

            <!-- <select name="projects" id="projects" class="w-full p-2 mb-4">
                <option value="" disabled selected>SELECT A PROJECT</option>
                <option value="bug-tracker-app">Bug Tracker App</option>
                <option value="chat-gpt-app">ChatGPT App</option>
            </select> -->

            <ul class=" mx-auto">
                <li class="p-2 border flex justify-between border-gray-300"><span>Task one</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li>
                <li class="p-2 border flex justify-between border-gray-300"><span>Task Two</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li>
            </ul>
        </div>
    </div>
</div>

@endsection
