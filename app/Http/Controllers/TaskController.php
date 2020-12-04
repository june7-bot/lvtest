<?php

namespace App\Http\Controllers;


use App\Task;
use App\User;
use App\Repositories\TakeRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    protected $tasks;
    
    public function __construct(TakeRepository $tasks )
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {   
        // $tasks = Task::where('user_id', $request->user()->id)->get();
        
        return view('tasks.index' ,[
            'tasks' => User::find($request->user()->id)->tasks,
        ]);
       
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name'=>$request->name,
        ]);
            return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
    {       
        $this->authorize('destroy'  ,$task);
        $task->delete();
        return redirect('/tasks');
    }
}
