<select name="projects" id="projects" class="w-full p-2 mb-4">
    <option value="" disabled selected>SELECT A PROJECT</option>
    @foreach($projects as $project)
        <option value="{{ $project->id }}">{{$project->name}}</option>
    @endforeach
    <!-- <option value="chat-gpt-app">ChatGPT App</option> -->
</select>
