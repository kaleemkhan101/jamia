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
    <h3>EXAMPLE FORM<small>All Fields</small></h3>
    </div>
    <div class="panel panel-default">
<div class="panel-body">

</div>
	<div class="container col-md-6 col-md-offset-3">

	<div class="form-group">
	{{Form::open(array('url'=>'register','files'=>true, 'class'=>'form'))}}

	{{ Form::hidden('panda', 'luishi') }}

{{Form::label('first_name','First Name (Text Field)',['class'=>'form-control'])}}
{{Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Enter First Name' ])}}

{{Form::label('last_name','Last Name (Text Field)',['class'=>'form-control'])}}
{{Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Enter Last Name'])}}

{{Form::label('email','Email Address (Email Field)',['class'=>'form-control'])}}
{{Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Enter Email Address'])}}

{{Form::label('password','Password (Password Field)',['class'=>'form-control'])}}
{{Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter Password'])}}
<hr>
{{Form::label('body', 'Enter your message (Textarea Field)')}}
{{Form::textarea('body',null,['class'=>'form-control', 'rows'=>3])}}
<hr>
{{Form::label('my_color','My Color (Select Field)',['class'=>'form-control'])}}
{{ Form::select('my_color', array('red' => 'Red','black' => 'Black','white' => 'White'),'black',['class'=>'form-control'])}}
<hr>
{{Form::select('city', array('lahore'=>'Lahore','karachi'=>'Karachi'),'lahore',array('class'=>'form-control'))}}

{{ Form::label('pandas_are_cute', 'Are pandas cute?') }}
{{ Form::checkbox('pandas_are_cute', '1', true) }}
{{ Form::label('pandas', 'Are pandas cute?') }}
{{ Form::checkbox('pandas', '2') }}
<hr>
{{ Form::label('panda_colour', 'Pandas are?') }}
{{ Form::radio('panda_colour', 'red', true) }} Red
{{ Form::radio('panda_colour', 'black') }} Black
{{ Form::radio('panda_colour', 'white') }} White
<hr>
{{Form::label('my_city','Name of my city')}}
{{Form::radio('my_city','uch', true)}} Uch Sharif
{{Form::radio('my_city','ape')}} Ahmedpur East
{{Form::radio('my_city','bwp')}} Bahawalpur
{{Form::radio('my_city','ryk')}} Rahim Yar Khan
{{ Form::label('avatar', 'Avatar') }}
{{ Form::file('avatar') }}
<hr>
{{Form::submit('Register',['class'=>'btn btn-default'])}}
{{Form::reset('Clear',['class'=>'btn btn-warning'])}}
{{Form::button('Cancle',['class'=>'btn btn-success'])}}
<hr>
{{Form::image(asset('btn.gif', 'submit')) }}
</div>

</div>
{{Form::close()}}
</body>
</html>
