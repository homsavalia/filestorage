<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller; 
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo = '/';
    public function login()
    {
         return view('auth.login');
        
    }
    public function logincheck(Request $request){
        
        $request->validate([
            'username'=>'required',
            'password' => 'required'
        ]);
        $user = $request->only('username', 'password');
    
        if (Auth::attempt($user)) {
            if(Auth::user()->role==0){
                return view('admin.dashboard');
               
            }
            elseif (Auth::user()->role==1) {
                return view('company.dashboard');
            }
            elseif (Auth::user()->role==2) {
                return view('customer.dashboard');
            }
            else{
                return back('/');
            }
        }
        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }

}
