
@extends('layouts.app-layout')
@section('content')

<div class="container mt-5">
    <div class="card p-4 shadow" style="border-radius: .75rem; background-color: white;">
      <h2 class="text-center mb-4" >Add Task</h2>
      <form method="post" action="{{ route('edittask.show', ['id'=> $task->id] )}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="taskTitle">Task Title</label>
          <input type="text" value="{{$task->title}}" name="taskTitle" class="form-control" id="taskTitle" placeholder="Enter task title">
        </div>
        <div class="form-group">
          <label for="taskDescription">Task Description</label>
          <textarea class="form-control" value="{{$task->description}}" name="taskDescription" id="taskDescription" rows="3" placeholder="Enter task description">{{$task->description}}</textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="startDate">Start Date</label>
            <input type="date" value="{{$task->startDate}}" name="startDate" class="form-control" id="startDate">
          </div>
          <div class="form-group col-md-6">
            <label for="endDate">End Date</label>
            <input type="date" value="{{$task->endDate}}" name="endDate" class="form-control" id="endDate">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update Task</button>
        <a href="{{ url('/alltask') }}" class="btn btn-secondary btn-block mt-3">View All Tasks</a>
      </form>
    </div>
  </div>
@endsection