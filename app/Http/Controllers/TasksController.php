<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        return 'your data was submited!';
        // return request()->all();
    }


    // Replace the homepage
    // Handle the tasks submission data
    // create a task 
    // Display a list of tasks 
    // Mark a task as completed
    // Divide the tasks into completed and uncompleted section
    // Delete  a task permanently
}
