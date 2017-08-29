<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function getSignUp() {
        return view('user.signup');
    }

    public function postSignUp(Request $request) {

        //dd($request);

        $email = $request->input('email');
        $password = $request->input('password');
        
        $this->validate($request, [
            'email'     => 'email|required|unique:users',
            'password'  => 'required|min:4'
        ]);

        $user = new User([
            'email'     => $email,
            'password'  => bcrypt($password)
        ]);

        $user->save();

        return redirect()->route('product.index');
    }

    public function getSignIn(){
        return view('user.signin');
    }

    public function postSignIn(Request $request){
    
        $email = $request->input('email');
        $password = $request->input('password');

        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('product.index');
        }

        return redirect()->back();
    }


    public function getLogout(){
        Auth::logout();

        return redirect()->route('product.index');
    }
}
