<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Http\Controllers\Auth\Request;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // public function redirectTo() {
    //     $role = Auth::users()->role; 
    //     $pass= Auth::users()->password; 
    //     if(Auth::users()->role  == Auth::users()->password){
    //         return '/dashboard';
    //   }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        if (auth()->attempt(request(['email', 'password', 'role'])) == true ) {
           if($request->email || $request->password || $request->role){
            return redirect()->route('dashboard');
           }
        }

        else {
           return back()->withErrors(['message' => 'The email, password & role is incorrect, please try again',]);
        }
    }
}
