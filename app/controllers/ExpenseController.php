<?php
class ExpenseController extends BaseController{

// Show all listing of expenses.
public function index()
	{
		//$expense = DB::table('expenses')->join('categories', 'expenses.cat_id'='categories.id')
	$expense = Expense::with('category')
						->orderBy('created_at', 'DESC')
						->paginate(5);
	return View::make('expense.index', compact('expense'));
	}

	public function indexByCategory($id)
	{
		
	$expense = Expense::where('category_id','=',$id)
						->with('category')
						->orderBy('created_at', 'DESC')
						->paginate(2);
	return View::make('expense.category', compact('expense'));
	}
	

	public function indexByDate($date)
	{
		
	$expense = Expense::whereBetweent('created_at', array($date.'00:00:00', $date.'23:59:59'))
						->with('category')
						->orderBy('created_at', 'DESC')
						->paginate(2);
	return View::make('expense.date', compact('expense'));
	}

// Show the create expense form.
public function getCreate()
	{
		$expenses = Category::lists('name', 'id');
	return View::make('expense.create',compact('expenses'));
	}

public function postCreate()
	{
		 // Handle create form submission.
		$rules = array(
		'category_id'=>'required',
		'amount'=>'required'
		);
	$validator = Validator::make(Input::all(), $rules);
	if($validator->passes()){
	$expense = new Expense;
	$expense->category_id = Input::get('category_id');
	$expense->amount = Input::get('amount');
	$expense->voucher_no = Input::get('voucher_no');
	$expense->description = Input::get('description');
	$expense->save();
	return Redirect::action('ExpenseController@index');
}
return Redirect::action('ExpenseController@getCreate')->withInput()->withErrors($validator);
}

public function getEdit(Expense $expense)
	{
		$expenses = Category::lists('name', 'id');
		return View::make('expense.edit', compact('expense', 'expenses'));
	}

public function postEdit()
	{
		$rules = array(
		'cat_id'=>'required',
		'amount'=>'required',
		);
	$validator = Validator::make(Input::all(), $rules);
	if($validator->passes()){
		$expense = Expense::findOrFail(Input::get('id'));
		$expense->cat_id= Input::get('category_id');
		$expense->amount= Input::get('amount');
		$expense->voucher_no=Input::get('voucher_no');
		$expense->description= Input::get('description');
		$expense->save();
		return Redirect::action('ExpenseController@index');
}
return Redirect::action('ExpenseController@getEdit')->withInput()->withErrors($validator);
}

public function getDelete(Expense $expense){
	$cats = Category::find($expense->category_id);
	return View::make('expense.delete', compact('expense','cats'));
}
public function postDelete()
{
	$expense = Expense::findOrFail(Input::get('id'));
	$expense->delete();
	return Redirect::action('ExpenseController@index');
}
}