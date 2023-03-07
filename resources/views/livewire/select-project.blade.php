
<div class="pb-2 mb-4 flex">
    <select wire:model="project_id" name="projects" id="projects" class="w-full">
        <option value="" selected>SELECT A PROJECT</option>
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{$project->name}}</option>
        @endforeach
        <!-- <option value="chat-gpt-app">ChatGPT App</option> -->
    </select>
    <button wire:click="delete" class="px-4 py-2 border-b border-gray-300 bg-red-500 shadow-md text-white">DELETE</button>
</div>
