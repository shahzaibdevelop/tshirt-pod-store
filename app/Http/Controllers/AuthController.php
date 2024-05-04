<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Save the user to the database
        if ($user->save()) {
            notyf()->addSuccess('User Registered Successfully!');
            return back();
        }else{
            notyf()
            ->duration(2000) // 2 seconds
            ->addError('Something Went Wrong!');
        }

       
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {

            return redirect()->route('design.index');
        } else {
            notyf()->addSuccess('User Registered Successfully!');

            notyf()
                ->duration(2000) // 2 seconds
                ->addError('Invalid Credentials!');
            return back();
        }
    }
    public function logout(){
        Session()->flush();
        return redirect()->route('design.index');
    }
}
