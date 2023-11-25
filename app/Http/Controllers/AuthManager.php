<?php
//Controllers to Handle validation and sending data to the table

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function signup(){
        return view('register');//Render Registration page
    }

    function signupPost(Request $request){
        $request->validate([
            'firstName'=>'required|string',
            'lastName'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|confirmed|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'required'
        ]);//Validate Input Information

        //Data array to hold information
        $data['firstName'] = $request->firstName;
        $data['lastName'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        //Create User in Database
        $user = User::create($data);
        if (!$user) {
            return redirect(route('signup'))->with("error", "Registration Failed!");
        }
        return redirect(route('home'))->with("success", "Successful Registration!");
    }
}
