@extends('cats.layout')
@section('content')
<div class="page-header">
    <h3>EDIT EXPENSE<small>Expenses Jamia</small></h3>
    </div>
    <div class="panel panel-default">
<div class="panel-body">
<a href="{{action('ExpenseController@index')}}" class="btn btn-primary">List of Expenses</a>
<a href="{{action('CategoryController@getCreate')}}" class="btn btn-primary pull-right">Create Category</a>

</div>
</div>
 {{Form::open(['url'=>'/expense/edit/', 'class'=> 'form'])}}  
 {{Form::hidden('id', $expense->id)}}

<div class="form-group">
    {{Form::label('cat_id', 'Select Category:')}}
    {{Form::select('cat_id', $expenses, null, ['class'=>'form-control'])}}
    <div class ="text-danger">{{ $errors->first('cat_id')}}</div>
</div>

 <div class="form-group">
    {{Form::label('amount', 'Amount:')}}
    {{Form::text('amount', $expense->amount, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('amount')}}</p>
    </div>

    <div class="form-group">
    {{Form::label('voucher_no', 'Voucher No.:')}}
    {{Form::text('voucher_no', $expense->voucher_no, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('voucher_no')}}</p>
    </div>

 <div class="form-group">
    {{Form::label('description', 'Description:')}}
    {{Form::textarea('description', $expense->description, ['class'=>'form-control'])}}
     <p class="text-danger"> {{ $errors->first('description')}}</p>
    </div>
    <hr>
       <div class="form-group">
    {{Form::submit('Update', ['class'=>'btn btn-success pull-right'])}}
    {{Form::button('Cancel', ['class'=>'btn btn-default '])}}
</div>
{{Form::close()}}
@stop