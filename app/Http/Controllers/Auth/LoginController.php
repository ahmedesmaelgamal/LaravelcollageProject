<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    //important   (for privilege)
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful

            if (Auth::user()->privilege == 'admin') {
                return redirect()->intended('/admin-home');
            } else if (Auth::user()->privilege == 'doctor') {
                return redirect()->intended('/doctor-home');
            } 
            else{
                return redirect()->intended('/student-home');
            }
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'credentials' => 'These credentials do not match our records.',
        ]);
    }




    public function logout()
    {
        $this->guard()->logout();

        return redirect('/login');
    }


    
}
