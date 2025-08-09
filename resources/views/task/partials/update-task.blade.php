<form action="{{route('task.update', $task->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="flex w-full items-center flex-col justify-center max-w-7xl ">
        <x-input-label>Title</x-input-label>
        <x-text-input class="w-full" value="{{old('title', $task->title)}}" type="text" name="title" placeholder="Enter Title"></x-text-input>
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
        <x-input-label>Description</x-input-label>
        <x-text-input  class="w-full"  value="{{old('description', $task->description)}}" type="text" name="description" placeholder="Enter Description"></x-text-input>
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
        <x-primary-button class="w-full mt-5">Submit</x-primary-button>
    </div>
</form>
