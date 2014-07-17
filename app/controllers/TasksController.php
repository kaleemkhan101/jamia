<?php
class TasksController extends BaseController{
  
  public function index()
  {
  $tasks = Task::all();
  $users = User::lists('username', 'id');
  return View::make('tasks.index', compact('tasks','users'));
  }

public function show($id)
{
  $task = Task::findOrFail($id)->first();
  return View::make('tasks.show',compact('task'));
}

public function store()
{
  $rules = array(
  'title'=>'required',
  'body'=>'required'
  );
  $validator = Validator::make(Input::all(),$rules);
  if($validator->passes())
  {
  $task=new Task;
  $task->title = Input::get('title');
  $task->body=Input::get('body');
  $task->user_id=Input::get('assign');
  $task->save();
  return Redirect::to('/tasks');
  }
  return Redirect::to('/tasks')->withInput()->withErrors($validator);
}
}


// <?php
// class TasksController extends BaseController{
    
//     public function index(){
//     $tasks = Task::all();
//     $users = User::lists('username','id');
//     return View::make('tasks.index',compact('tasks','users'));
//     }

//     public function show($id){
//     $task = Task::findOrFail($id);
//     return View::make('tasks.show',compact('task'));
//     }

//     public function store()
//     {
//    $rules = array(
//     'title'=> 'required',
//     'body'=>'required'
//     );  
//   $validator = Validator:: make(Input::all(), $rules);
//   if($validator->passes()){
//       $task = new Task;
//       $task->title = Input::get('title');
//       $task->body = Input::get('body');
//       $task->user_id = Input::get('assign');
//       $task->save();
//       return Redirect::to('/tasks');
//     }
//     return Redirect::to('/tasks')->withInput()->withErrors($validator);
// }
// }
