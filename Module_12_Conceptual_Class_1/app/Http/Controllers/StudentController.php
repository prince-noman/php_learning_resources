<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       //Get All students
    //    $students = Student::get();
    //    dd($students);

    // Get students by id
    // $student = Student::findOrFail(4);
    // $profile = $student->profile;
    // dd($profile);

    //Getting students with Profile
    // $students = Student::with('profile')->get();
    // dd($students);

// One to Many

    //     //Get All students
    //    $students = Student::get();
    //    dd($students);

    // Get students by id
    // $student = Student::findOrFail(4);
    // $comments = $student->comments;
    // // dd($comments);
    // return response($comments);

    //Getting students with Comments
    // $student = Student::with('comments')->find(1);
    // return response($student);
    // foreach ($student->comments as $comment) {
    //     echo $comment->comment . '<br>';
    // }


    //Getting students with Comments
    // $student = Student::with('subjects')->get();
    // return response($student);
    // foreach ($student->comments as $comment) {
    //     echo $comment->comment . '<br>';
    // }


    // student -> profile, comments, subject
    $students = Student::with([
        'comments' => function($query){
            $query->select('student_id', 'comment');
        },
    'subjects' => function($query){
        $query->select('student_id', 'name');
    }, 
    
    ])->get();
    return response($students);

    //  $student = Student::find(1);
    //  if($student->name == 'abc') $student->load('profile');
    //  $student->name ? $student->load('profile') : '';
    // return response($student);
}
}