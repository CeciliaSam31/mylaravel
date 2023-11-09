<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

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
        $credentials = $request->only('email', 'password');

        // Define your predefined email and password values
        $validEmail = 'ceciliasampayan08@gmail.com';
        $validPassword = '053123';

        if ($credentials['email'] === $validEmail && $credentials['password'] === $validPassword) {
            // Authentication passed, redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect back with an error message
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
