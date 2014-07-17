@extends('users.layout')
@section('content')

<div class="page-header">
    <h3>REGISTER NEW USER<small>Jamia Hussainia</small></h3>
</div>
    
 {{Form::open(['url'=>'user/register/', 'class'=> 'form'])}}  

<div class="form-group">
    {{Form::label('name', 'Name:')}}
    {{Form::text('name', null, ['class'=>'form-control'])}}
    <p class ="text-danger">{{ $errors->first('name')}}</p>
</div>

 <div class="form-group">
    {{Form::label('email', 'Email:')}}
    {{Form::email('email', null, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('email')}}</p>
    </div>

    <div class="form-group">
    {{Form::label('password', 'Password:')}}
    {{Form::password('password',['class'=>'form-control'])}}
       <p class="text-danger"> {{ $errors->first('password')}}</p>
    </div>
     <div class="form-group">
    {{Form::label('password_confirmation', 'Password Confirmation:')}}
    {{Form::password('password_confirmation', ['class'=>'form-control'])}}
       <p class="text-danger"> {{ $errors->first('password_confirmation')}}</p>
    </div>

 <div class="form-group">
    {{Form::label('permission', 'Permission:')}}
    {{Form::text('permission', null, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('permission')}}</p>
    </div>
    <hr>
       <div class="form-group">
    {{Form::submit('Register', ['class'=>'btn btn-success pull-right'])}}
    {{Form::reset('Clear', ['class'=>'btn btn-default '])}}
</div>
{{Form::close()}}
@stop