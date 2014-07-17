@extends('cats.layout')
@section('content')
<div class="page-header">
<h3>DELETE CATEGORY ? <small>Expenses Jamia</small></h3>
</div>

 <div class="panel panel-default">
<div class="panel-body">
<h4>{{ $cats->name }}</h4>
</div>
</div>

<form action="{{ action('CategoryController@postDelete') }}" method="post" role="form">
<input type="hidden" name="id" value="{{$cats->id}}" />
<input type="submit" class="btn btn-danger pull-right" value="Delete" />
<a href="{{ action('CategoryController@index')}}" class="btn btn-default pull-right">Cancel</a>
</form>
@stop