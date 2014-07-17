<?php
class Expense extends Eloquent {

	 public static $timestamps = false;

public function category()
	{
	return $this->belongsTo('Category');
	}

}