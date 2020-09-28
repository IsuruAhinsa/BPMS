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

    public function guard()
    {
        return Auth::guard('player');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:player')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login', ['url' => '/login']);
    }

    public function login(Request $request)
    {
        // validate login
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('player')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        Auth::guard('player')->logout();
        return redirect('/login');
    }
}
