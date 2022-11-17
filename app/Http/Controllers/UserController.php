<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        
        $req-> validate([
            'name'=> 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required',
        ]);

        $data = new User();
        $data->name =$req->name;
        $data->email =$req->email;
        $data->password = Hash::make($req->password);

        $data->save();
        // return redirect('/login');
        if($data){
            return redirect('/login');
        } else {
            return back()->with('fail','Unable to signup');
        }
    }

    public function loginUser(Request $req)
    {
        
        $req-> validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $user = User::where('email','=', $req->email)->first();

        if($user){
            if(Hash::check($req->password, $user->password)){
                return redirect('/');
            } else {
                return back()->with('fail', 'Password not Matched');
            } 
        } else {
            return back()->with('fail', 'User not Found');
        }

    }
}
