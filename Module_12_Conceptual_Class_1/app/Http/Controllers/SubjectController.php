<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        //Getting students with Comments
    $subjects = Subject::with('students')->get();
    return response($subjects);
    // foreach ($student->comments as $comment) {
    //     echo $comment->comment . '<br>';
    // }
    }
}