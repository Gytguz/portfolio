<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function registerPage() {
        return Inertia::render('User/Register');
    }

    public function registerStore(Request $request)
    {
        $formFields = $request->validate([
          'name' => ['required', 'min:3'],
          'email' => ['required', 'email', Rule::unique('users', 'email')],
          'password' => ['required', 'alpha_num:ascii' ,'min:6', 'max:50'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return to_route('homePage');
    }

    public function loginPage() {
      return Inertia::render('User/Login', [
          'users' => User::all(),
        ]);
     }

     public function authenticate(Request $request){
      $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'alpha_num:ascii'],
      ]);

      if(auth()->attempt($formFields)){
        $request->session()->regenerate();

        return to_route('homePage');
      }
     }
}
