<?php

namespace App\Units\Auth\Http\Controllers\Auth;

use App\Units\Auth\Http\Controllers\BaseController;
use App\Units\Auth\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;



    function getlogin()    {

        return $this->view('auth::auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            $user = Auth::user();

            return redirect()->route('painel.home');

        } else {
            Flash::error('Login ou senha inválidos');
            return redirect()->back();
        }
    }


}
