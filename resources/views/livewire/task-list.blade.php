<ul class=" mx-auto">
    @foreach($tasks as $task)
        <li class="p-2 border flex justify-between border-gray-300"><span>{{ $task->name }}</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li>
    @endforeach
    <!-- <li class="p-2 border flex justify-between border-gray-300"><span>Task Two</span><button class="px-4 text-red-500 font-bold font-sans">X</button></li> -->
</ul>