<!DOCTYPE html>
<html lan="eng">
<head>
	
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />  
<title>
	My Form Sampl
</title>
</head>
<body>
	<div class="page-header">
    <h3>CONTACT US<small>Send Email</small></h3>
    </div>
    <div class="panel panel-default">
<div class="panel-body">

</div>
	<div class="container col-md-6 col-md-offset-3">
{{Form::open(array('url'=>'/mail', 'class'=>'form'))}}
<div class="form-group">

{{Form::label('name','Your Name:')}}
{{Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Enter  your name'])}}
<hr>
{{Form::label('email','Email Address:')}}
{{Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Enter your email address'])}}
<hr>

{{Form::label('body','Message:')}}
{{Form::textarea('body',null,['class'=>'form-control'])}}
<hr>
{{Form::submit('Send email',['class'=>'btn btn-success'])}}
</div>
{{Form::close()}}

</doby>
</html>
