<?php
class Category extends Eloquent {

	public static $rules = array(
		'name'=>'required',
		'description'=> 'required'
		);

	public function expenses()
	{
		return $this->hasMany('Expense');
	}
}