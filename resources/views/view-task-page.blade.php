@extends('layouts.app-layout')
@section('content')
<div class="container custom-container mt-5">
    <div class=" p-4" style="border-radius: 1rem; background-color: white;">
      <h2 class="text-center mb-4" >View Tasks</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col" >Title</th>
            <th scope="col" >Description</th>
            <th scope="col" >Start Date</th>
            <th scope="col" >End Date</th>
            <th scope="col" >Status</th>
            <th scope="col" >Actions</th>
          </tr>
        </thead>
        @foreach ($task as $tasks)
        <tbody>
          <tr>
            <td>{{$tasks->title}}</td>
            <td>{{$tasks->description}}</td>
            <td>{{$tasks->startDate}}</td>
            <td>{{$tasks->endDate}}</td>
            <td>Active</td>
            <td>
              <a href="{{route('edittask.edit', ['id'=> $tasks->id])}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
              <a href="#" data-toggle="modal" data-target="#confirmDeleteModal" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></a>
            </td>
          </tr>       
        </tbody>

        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this task?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="{{route('deletetask.show', ['id' => $tasks->id])}}" method="GET" style="display: inline">
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </table>
      <div class="text-center mt-3">
        <a href="{{ route('newtask.add')}}" class="btn btn-primary">Create New Task</a>
      </div>
    </div>
  </div>  
@endsection