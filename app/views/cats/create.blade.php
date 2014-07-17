@extends('cats.layout')
@section('content')
<div class="page-header">
    <h3>CREATE CATEGORY<small>Expenses Jamia</small></h3>
    </div>
    <div class="panel panel-default">
<div class="panel-body">
<a href="{{action('CategoryController@index')}}" class="btn btn-primary">List Category</a>
</div>
</div>

<form action="{{ action('CategoryController@getCreate') }}" method="post" role="form">
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" />
    <p class="text-danger"> {{ $errors->first('name')}}</p>
    </div>
    <div >
    <label for="description">Description:</label>
    <textarea rows="10" class="form-control" name="description" /></textarea>
    <p class="text-danger">{{ $errors->first('description')}}</p>
    </div>
    
    <input type="submit" value="Create" class="btn btn-success pull-right" />
    <a href="{{ action('CategoryController@index') }}" class="btn btn-default pull-right">Cancel</a>
    </form>
@stop