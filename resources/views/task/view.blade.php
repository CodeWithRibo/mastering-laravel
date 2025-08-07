@extends('layouts.app')
@section('content')
    <ul>
     <li>{{$task->title}}</li>
     <li>{{$task->description}}</li>
     <li>{{$task->status}}</li>
    </ul>
@endsection
