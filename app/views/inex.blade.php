@extends('layouts.master')
@section('content')
<h1>All Tasks</h1>
<ul class="list-group">
@foreach($tasks as $task)
<li class="list-group-item">
		<img src="{{gravatar_url($task->user->email)}}" alt = "{{$task->user->email}}">

{{link_to("{$task->user->username}/tasks/{$task->id}", $task->title)}}
</li>
@endforeach
</ul>
<hr>
@if (isset($users))
<h3> Add New Task</h3>
@include('tasks/partials/form')
@endif
@stop