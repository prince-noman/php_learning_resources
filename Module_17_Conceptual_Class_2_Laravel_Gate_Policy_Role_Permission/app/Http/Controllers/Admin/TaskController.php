<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
   public function index(){
    $tasks = Task::all();
    return view('tasks.admin_index',compact('tasks'));
   }
}