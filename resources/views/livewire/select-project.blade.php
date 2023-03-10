
<div class="pb-2 mb-4 flex">
    <select wire:model="project_id" name="projects" data-cy="projects" class="pl-2 w-full">
        <option value="" selected>SELECT A PROJECT</option>
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{$project->name}}</option>
        @endforeach
        <!-- <option value="chat-gpt-app">ChatGPT App</option> -->
    </select>
    <button wire:click="delete" data-cy="delete-project" class="px-4 py-2 border-b border-gray-300 bg-red-500 shadow-md text-white">DELETE</button>
</div>
