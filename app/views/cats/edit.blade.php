@extends('cats.layout')
@section('content')
<div class="page-header">
<h3>EDIT CATEGORY <small>make changes</small></h3>
</div>
<form action="{{ action('CategoryController@postEdit') }}" method="post" role="form">
<input type="hidden" name="id" value="{{ $cats->id }}">

<div class="form-group">
<label for="name">Name:</label>
<input type="text"  class="form-control" name="name" value="{{ $cats->name}}"/>
<p class="text-danger"> {{ $errors->first('name')}}</p>
</div>

<div class="form-group">
<label for="description">Description:</label>
<textarea rows="10" class="form-control" name="description">{{ $cats->description}}</textarea>
<p class="text-danger">{{ $errors->first('description')}}</p>
</div>

<input type="submit" value="Update" class="btn btn-primary pull-right" />
<a href="{{ action('CategoryController@index')}}" class="btn btn-default pull-right">Cancel</a>
</form>
@stop