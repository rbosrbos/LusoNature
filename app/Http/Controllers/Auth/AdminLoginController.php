<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest'); // won't allow to log in as admin if already logged in as user
        $this->middleware('guest:admin')->except('logout'); //allows 2 logins at same time
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
        $remember = $request->remember;

        // Attempt to login user
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            // if successfull redirect to intended location
            return redirect()->intended(route('admin.mainpage'));
        }


        // if not redirect back to form
        return redirect()->back()->withInput($request->only('email','remember'));
    }

        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // if ($response = $this->loggedOut($request)) {
        //     return $response;
        // }
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }
}
