<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class todoController extends Controller
{

    public function showTaskPage()
    {
        return view('add-task-page');
    }
    public function addNewTask(Request $request)
    {
        $validatedData = $request->validate([
            'taskTitle'=> 'required|max:100',
            'taskDescription'=>'nullable',
            'startDate'=>'required|date',
            'endDate'=> 'required|date|after_or_equal:startDate'
        ]);
        $task = new Todo();
        $task->title = $validatedData['taskTitle'];
        $task->description =$validatedData['taskDescription'];
        $task->startDate=$validatedData['startDate'];
        $task->endDate=$validatedData['endDate'];
        $task->save();

        return redirect('/newtask')->with('success','Task has created successfully');
    
    }
    public function viewAllTask()
    {
        $task = Todo::all();
        $data = compact('task');
        return view('view-task-page')->with($data);
    }
}
