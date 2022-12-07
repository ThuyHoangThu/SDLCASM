<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard\users;
use App\Models\Song;
use App\Models\Order;

class UserController extends Controller
{
    //return ra trang login
    public function showLogin()
    {
        return view('admin/login');
    }

    public function showRegister()
    {
        return view('users/register');
    }
    
    //store function for registration
    public function store(Request $request)
    {
        if ($request->isMethod('POST')){
            $user = DB::table('users')->where('email',$request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->password = Hash::make($request->password);
                $newUser->name = $request->name;
                
                $newUser->save();
                return redirect()->route('home')->with('message', 'Create account success');
                
            } else {
                return redirect()->route('register')->with('message', 'Account exist!');
            }
        }
    }

    //store function for login function
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
        $user = Auth::user()->name;
        $songs = Song::all();
        return view('users/index-logged', compact ('user'), compact('songs'));
        }
        else
        {
            return redirect()->route('login')->with('message', 'Invalid username or password');
        }
    }
   
    public function listUser()
    {
        $users = User::all();
        return view('admin/list-user', compact('users'));
    }

    //create store function to handle logout function
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
