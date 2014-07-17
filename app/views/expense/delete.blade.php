@extends('cats.layout')
@section('content')
<div class="page-header">
<h3>DELETE RECORD ? <small>Expenses Jamia</small></h3>
</div>
 <div class="panel panel-default">
<div class="panel-body">
<h4>Category: {{$cats->name}}</h4>
<h4>Amount:{{ $expense->amount }}</h4>
<h4>Voucher No.:{{ $expense->voucher_no }}</h4>
<h4>Description:{{ $expense->description }}</h4>
</div>
</div>
<hr>
<form action="{{ action('ExpenseController@postDelete') }}" method="post" role="form">
<input type="hidden" name="id" value="{{$expense->id}}" />
<input type="submit" class="btn btn-danger pull-right" value="Delete" />
<a href="{{action('ExpenseController@index')}}" class="btn btn-default">Cancel</a>
</form>
@stop