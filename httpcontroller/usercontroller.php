<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class usercontroller extends Controller
{

    public function login(Request $request){
        $incomingfield = $request->validate([
            'loginname'=>'required',
            'loginpassword'=>'required'
        ]);
        if(auth()->attempt(['name'=> $incomingfield['loginname'], 'password'=>$incomingfield['loginpassword']]))
        $request->session()->regenerate();
        
        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('login');
    }


        public function register(Request $request){
        $incomingfield = $request->validate([
            'name' => ['required', Rule::unique('users','name')],
            'email'=> ['required' , Rule::unique('users', 'email')],
            'password'=>['required']
        ]);


        $incomingfield['password']= bcrypt($incomingfield['password']);
        $user = User::create($incomingfield)  ;
        auth()->login($user);

        return redirect('/');
       
    }
}
