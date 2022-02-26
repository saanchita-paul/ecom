<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
}
