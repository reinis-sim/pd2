<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function username()
    {
        return 'name';
    }

    public function showForm()
    {
        return view('login', [
            'title' => 'Pieslēgties'
        ]);
    }
}
