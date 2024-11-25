<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register/create form
    public function create(){
        return view('users.register');
    }
    //Create new user
    public function store(Request $request): JsonResponse{
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return response()->json(['message' => 'User created and logged in'],200);
    }

    //Logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    //show login form
    public function login(){
        return view('users.login');
    }

    //Authenticate user
    public function authenticate(Request $request):JsonResponse{
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return response()->json(['message' => 'You have been logged in'],200);
        }

        return response()->json(['errors' => 'These credentials do not match our records.'],403);
    }
}
