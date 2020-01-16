<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    public function index()
    {
        $tasks=Task::all();

        return view('tasks',  ['tasks' => $tasks]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'description'=> 'required'
        ]);
        $task = new Task;
        $task->title = $request->get('title');
        $task->description = $request->get('description');
        $task->save();
        return redirect()->route('tasks.index');
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', ['task' => $task]);
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'description'=> 'required'
        ]);
        $task = Task::find($id);
        $task->title = request('title');
        $task->description = request('description');
        $task->save();
        return redirect()->route('tasks.index');
    }
    public function check($id)
    {
        $task = Task::find($id);
        $task->isDone = 1;
        $task->save();
        return redirect()->route('tasks.index');
    }
    public function uncheck($id)
    {
        $task = Task::find($id);
        $task->isDone = 0;
        $task->save();
        return redirect()->route('tasks.index');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
