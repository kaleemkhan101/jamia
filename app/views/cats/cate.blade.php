@extends('cats.layout')
@section('content')
<div class="page-header">
<h3>DETAIL OF CATEGORY <small>make changes</small></h3>
</div>
<div class="form-group">
<h3>{{ $cats->name}}</h3>
</div>
<div class="form-group">
<p>{{ $cats->description}}</p>
</div>
<a href="{{ action('CategoryController@index')}}" class="btn btn-default pull-right">Go back</a>

@stop