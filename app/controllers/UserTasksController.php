<?php

class UserTasksController extends BaseController {

	public function index($username)
	{
		$tasks= User::whereUsername($username)->first()->tasks;
		return View::make('tasks.index', compact('tasks'));
	}
	public function show($username, $taskId)
	{
		// $task = User::whereUsername($username)->first()->tasks()->findOrFail($taskId);
		// return View::make('tasks.show',compact('task'));
		

		$user = User::whereUsername($username)->first();
		$task= $user->tasks()->findOrFail($taskId);
		return View::make('tasks.show', compact('task'));
	}
	}