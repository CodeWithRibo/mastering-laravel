@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xs sm:rounded-lg">
                <div class="p-6 text-gray-900 text-2xl">
                    {{ __('Welcome to Task Management' . auth()->user()->name) }}
                </div>

                <div class="p-6">
                    @include('task.index-task')
                </div>
            </div>
        </div>
    </div>
@endsection
