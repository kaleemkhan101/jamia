@extends ('layout')
@section ('content')
{{$errors->first()}}
{{Form::open(['url'=>'myform','files'=>true])}}
{{Form::file('book')}}
{{Form::submit('Save')}}
{{Form::close()}}