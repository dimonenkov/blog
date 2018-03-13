<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    //Когато не намира логин метода getLogin
    public function getLogin()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

    return view('auth.login');
    }


    public function getLogout()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }
        // Как да се  логаутна
        return redirect('login')->with(Auth::logout());
    }


    //Същото и за пост заявките:
    public function postLogin()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

    return view('auth.login');
    }


    public function postLogout()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

    return view('auth.logout');
    }

    //how to logout

}
