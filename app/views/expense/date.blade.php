@extends('expense.layout')
@section('content')
<div class="page-header">
<h3>JAMIA ALL EXPENSES <small>Expenses Jamia</small></h3>
</div>
<div class="panel panel-default">
<div class="panel-body">
<a href="{{action('ExpenseController@getCreate')}}" class="btn btn-primary">Enter Expense</a>
</div>
</div>
@if ($expense->isEmpty())
<p>There are nothing ! :(</p>
@else
<table class="table table-bordered">
<thead>
<tr>
<th>SR. #</th>	
<th>DATE</th>
<th>DESCRIPTION</th>
<th>AMOUNT</th>
<th>VOUCHER #</th>
<th>ACTIONS</th>

</tr>
</thead>
<tbody>
@foreach($expense as $exp)

<tr>
	
<td>{{$exp->id}}</td>
<td> {{$exp->created_at->format('d-m-Y')}}</td>
<td> {{$exp->category->name}}</td>
<td> {{$exp->amount}}</td>
<td> {{$exp->voucher_no}}</td>

<td>
<a href="{{ action('ExpenseController@getEdit', $exp->id) }}" class="btn btn-default">Edit</a>
<a href="{{ action('ExpenseController@getDelete', $exp->id) }}" class="btn btn-danger">Delete</a>
</td>
</tr>

@endforeach

</tbody>
</table>
@endif
{{$expense->links();}}<a href="{{action('ExpenseController@index')}}" class="btn btn-default pull-right">Go back</a>
@stop