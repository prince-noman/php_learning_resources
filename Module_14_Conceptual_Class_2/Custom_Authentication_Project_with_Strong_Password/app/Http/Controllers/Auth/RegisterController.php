<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validators = Validator::make($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required', 'confirmed',
                Password::min(2)->letters()->numbers()->symbols()->mixedCase()
                ]
        ]);

        if($validators->fails()){
            return response()->json([
                'message' => $validators->errors()
            ],200);
        }



        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}