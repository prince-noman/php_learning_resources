<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

        // $comments = Comment::all();
        // return response($comments);


         //Getting comments with student
    $comments = Comment::with('student')->get();
    return response($comments);
    }


    
}