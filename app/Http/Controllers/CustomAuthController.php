<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $res = $user->save();

        if($res){
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if($user) {
            if (Hash::check($request->input('password'), $user->password)) {

                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
public function dashboard(){
    return  view ('dashboard');
}


}