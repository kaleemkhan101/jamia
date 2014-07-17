@extends('cats.layout')
@section('content')
<div class="page-header">
<h3>ALL CATEGORIES <small>Expenses Jamia</small></h3>
</div>
<div class="panel panel-default">
<div class="panel-body">
<a href="{{action('CategoryController@getCreate')}}" class="btn btn-primary">Create Category</a>
</div>
</div>
@if ($cats->isEmpty())
<p>There are nothing ! :(</p>
@else
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
@foreach($cats as $cat)
<tr>
<td><a href="{{action('CategoryController@showCat', $cat->id)}}" class="btn btn-link"> {{$cat->name}}</td>
<td>
<a href="{{ action('CategoryController@getEdit', $cat->id) }}" class="btn btn-default">Edit</a>
<a href="{{ action('CategoryController@getDelete', $cat->id) }}" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif

@stop