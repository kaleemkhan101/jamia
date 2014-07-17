<?php
class Task extends Eloquent { 

protected $guarded = ['id'];

public static $rules = [
	'title'=>'required',
	'body'=>'required',
	'assign'=>'required'
	];


	public function users()
	{
		return $this->belongsTo('User');
	}
	
	public function isValid()
	{
		$validation = Validator::make(Input::all(), Task::$rules);
	}
}