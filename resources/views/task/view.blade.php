@extends('layouts.app')
@section('content')
        <ul>
            <li>{{$task->title}}</li>
            <li>{{$task->description}}</li>
            <li>{{$task->status}}</li>
        </ul>
       @can('edit', $task)
           <a href="{{route('task.edit', $task->id)}}">
               <x-secondary-button>UPDATE</x-secondary-button>
           </a>
       @else
           <x-secondary-button disabled>You can't edit this</x-secondary-button>
       @endcan
@endsection
