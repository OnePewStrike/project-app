<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function registration()
    {
        return view("registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $name = $request->name;
        $username = $request->username;
        $password = Hash::make($request->password);

        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->password = $password;
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Success: You have registered successfully');
        } else {
            return back()->with('fail', 'Error: An error occurred please try again');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', '=', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Error: This password is not matched.');
            }
        } else {
            return back()->with('fail', 'Error: This username is not registered.');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view("dashboard", compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
