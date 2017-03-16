<?php

namespace App\Units\Auth\Http\Controllers\Auth;


use App\Units\Auth\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    public function getEmail()
    {
        return $this->view('auth::auth.password');
    }


}
