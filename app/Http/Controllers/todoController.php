<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        return view('login-page');
    }
    public function addNewTask()
    {
        return view('add-task-page');
    }
    public function viewAllTask()
    {
        return view('view-task-page');
    }
}
