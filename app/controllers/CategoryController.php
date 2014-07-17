<?php
class CategoryController extends BaseController{


public function showCat(Category $cats)
{
	
return View::make('cats.cate', compact('cats'));
}
//show listing of categories.
public function index()
{
$cats = Category::all();
return View::make('cats.index', compact('cats'));
}

public function getCreate()
{
	return View::make('cats.create');
}

public function postCreate()
{
	
	$validator = Validator::make(Input::all(), Category::$rules);
	if($validator->passes())
	{
		$cats = new Category;
		$cats->name = Input::get('name');
		$cats->description = Input::get('description');
		$cats->save();
		return Redirect::action('CategoryController@index');
	}
	return Redirect::to ('cats/create')->withInput()->withErrors($validator);
}

public function getEdit(Category $cats)
{
	return View::make('cats.edit', compact('cats'));
}

public function postEdit()
{
	
	$validator = Validator::make(Input::all(), Category::$rules);
	if($validator->passes())
	{
		$cats = Category::findOrFail(Input::get('id'));
		$cats->name = Input::get('name');
		$cats->description = Input::get('description');
		$cats->save();
		return Redirect::action('CategoryController@index');
}
return Redirect::to ('/cats/edit')->withInput()->withErrors($validator);
}

public function getDelete(Category $cats)
{
	return View::make('cats.delete', compact('cats'));
}

public function postDelete()
{
	$cats = Category::findOrFail(Input::get('id'));
	$cats->delete();
	return Redirect::to('/cats');
}
}