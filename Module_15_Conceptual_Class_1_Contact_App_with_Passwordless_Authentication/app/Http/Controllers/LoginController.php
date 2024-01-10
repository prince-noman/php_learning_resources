<?php

namespace App\Http\Controllers;

use App\Mail\MagicLoginLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        Mail::to($request->email)->send(new MagicLoginLink($request->email));


        return back()->with('success','We have sent a magic link to your email');
    }


    public function loginByMagicLink( User $user){
        auth()->login($user);
        return redirect()->route('home');
    }
}