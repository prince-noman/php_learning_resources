<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(){
       //For all functions of this controller
        // $this->middleware('test');
        //For specific functions of this controller
        // $this->middleware('test')->only(['store', 'show']);
        // For all functions except the some of this controller
        // $this->middleware('test')->except(['store', 'index']);
    }

    public function index(Request $request)
    {
        return $request->header();
    }

    public function store()
    {
        return "From store Method";
    }

    public function show()
    {
        return "From show Method";
    }

    public function create()
    {
        return "From show Method";
    }
    public function update()
    {
        return "From show Method";
    }

    public function destroy()
    {
        return "From show Method";
    }

}