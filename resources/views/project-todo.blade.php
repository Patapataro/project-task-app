@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="mx-auto w-4/5 shadow-xl">
        <!-- Create a project section -->
        @livewire('create-project')

        <!-- View and edit tasks section -->
        <div class="p-6 border-b border-gray-300">
            <h2 class="text-xl mb-4">Tasks</h2>

            @livewire('add-task')

            @livewire('select-project')

            @livewire('task-list')
        </div>
    </div>
</div>

@endsection
