<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($id){
        // $user_id = query........;
        $data = 'My Data';
        return view('Test', compact('id', 'data'));
        // return view('Test', [
        //     'user_id' => $id,
        //     'data' => $data
        // ]);
    }
}