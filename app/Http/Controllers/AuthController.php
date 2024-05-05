<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            notyf()->addSuccess('User Registered Successfully!');
            return back();
        }else{
            notyf()
            ->duration(2000)
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
            notyf()->addSuccess('Login successful');
            return redirect()->route('design.index');
        } else {
            notyf()
                ->duration(2000) 
                ->addError('Invalid Credentials!');
            return back();
        }
    }
    public function logout(){
        notyf()->addSuccess('Logout successful');
        Auth::logout();
        Session()->flush();
        return redirect()->route('design.index');
    }
}
