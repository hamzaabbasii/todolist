@extends('layouts.app-layout')
@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
      <h2 class="text-center mb-4">View Tasks</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Task Title</th>
            <th scope="col">Task Description</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Task Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Task 1</td>
            <td>Task 1 Description</td>
            <td>2023-05-08</td>
            <td>2023-05-10</td>
            <td>Not Started</td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">Update</a>
              <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
          <tr>
            <td>Task 2</td>
            <td>Task 2 Description</td>
            <td>2023-05-11</td>
            <td>2023-05-13</td>
            <td>In Progress</td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">Update</a>
              <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="text-center mt-3">
        <a href="/create-task" class="btn btn-primary">Create Task</a>
      </div>
    </div>
  </div>  
@endsection