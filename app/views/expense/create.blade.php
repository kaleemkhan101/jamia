@extends('cats.layout')
@section('content')
<div class="page-header">
    <h3>ENTER EXPENSE<small>Expenses Jamia</small></h3>
    </div>
    <div class="panel panel-default">
<div class="panel-body">
<a href="{{action('ExpenseController@index')}}" class="btn btn-primary">List of Expenses</a>
<a href="{{action('CategoryController@getCreate')}}" class="btn btn-primary pull-right">Create Category</a>

</div>
</div>
 {{Form::open(['url'=>'/expense/create/', 'class'=> 'form'])}}  

<div class="form-group">
    {{Form::label('category_id', 'Select Category:')}}
    {{Form::select('category_id', $expenses, null, ['class'=>'form-control'])}}
    <div class ="text-danger">{{ $errors->first('category_id')}}</div>
</div>

 <div class="form-group">
    {{Form::label('amount', 'Amount:')}}
    {{Form::text('amount', null, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('amount')}}</p>
    </div>

    <div class="form-group">
    {{Form::label('voucher_no', 'Voucher No.:')}}
    {{Form::text('voucher_no', null, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('voucher_no')}}</p>
    </div>

 <div class="form-group">
    {{Form::label('description', 'Description:')}}
    {{Form::textarea('description', null, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('description')}}</p>
    </div>
    <hr>
       <div class="form-group">
    {{Form::submit('Save record', ['class'=>'btn btn-success pull-right'])}}
    {{Form::button('Cancel', ['class'=>'btn btn-default '])}}
</div>
{{Form::close()}}
@stop