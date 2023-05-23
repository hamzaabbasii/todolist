@extends('layouts.app-layout')
@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow" style="border-radius: 1rem; background-color: white;">
      <h2 class="text-center mb-4" >View Tasks</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col" >Task Title</th>
            <th scope="col" >Task Description</th>
            <th scope="col" >Start Date</th>
            <th scope="col" >End Date</th>
            <th scope="col" >Task Status</th>
            <th scope="col" >Actions</th>
          </tr>
        </thead>
        @foreach ($task as $tasks)
        <tbody>
          <tr>
            <td>{{$tasks->id}}</td>
            <td>{{$tasks->title}}</td>
            <td>{{$tasks->description}}</td>
            <td>{{$tasks->startDate}}</td>
            <td>{{$tasks->endDate}}</td>
            <td>
              <a href="{{route('edittask.edit', ['id'=> $tasks->id])}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
              <a href="#" data-toggle="modal" data-target="#confirmDeleteModal" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></a>
            </td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
      <div class="text-center mt-3">
        <a href="{{ route('newtask.add')}}" class="btn btn-primary">Create New Task</a>
      </div>
    </div>
  </div>  
@endsection