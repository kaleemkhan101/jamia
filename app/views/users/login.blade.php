@extends('users.layout')
@section('content')

<div class="container">
  
{{Form::open(['url'=>'user/login', 'class' =>'form-signin', 'role'=>'form'])}}

        <h2 class="form-signin-heading">Please sign in</h2>
        

{{Form::email('email',null,['placeholder'=>'Email address','class'=>'form-control'])}}


{{Form::password('password',array('placeholder'=>'Password', 'class'=>'form-control'))}}
{{Form::submit('Sign in',['class'=>'btn btn-lg btn-primary btn-block'])}}    
             
    </div>
    {{Form::close()}}