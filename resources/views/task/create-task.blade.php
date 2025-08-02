@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <fieldset class="bg-white shadow-md rounded-md p-5 max-w-7xl mx-auto my-12 ">
        <form action="{{route('task.store', auth()->id())}}" method="POST">
            @csrf
            <div class="flex w-full items-center flex-col justify-center max-w-7xl ">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <x-input-label>Title</x-input-label>
                <x-text-input class="w-full" type="text" name="title" placeholder="Enter Title"></x-text-input>
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                <x-input-label>Description</x-input-label>
                <x-text-input  class="w-full" type="text" name="description" placeholder="Enter Description"></x-text-input>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />

                <x-input-label>Due Date</x-input-label>
                <x-text-input class="w-full" type="datetime-local" name="due_date" placeholder="Enter Title"></x-text-input>
                <x-input-error class="mt-2" :messages="$errors->get('due_date')" />

                <x-primary-button class="w-full mt-5">Submit</x-primary-button>
            </div>
        </form>
    </fieldset>
@endsection
