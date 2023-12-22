<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        // Get All profiles
        // $profiles = Profile::get();
        // dd($profiles);

        // Get Profile by ID
        // $profile = Profile::find(3);
        // $student = $profile->student;
        // dd($student->name);

        // Get Profile with Student
        // $profiles = Profile::with('student')->get();
        // dd($profiles);

        // IF we dont follow laravel naming convention
          $profiles = Profile::with('student')->get();
        // dd($profiles);
        return response($profiles);
        
    }
}