<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerPage() {
        return Inertia::render('User/Register');
    }

    public function registerStore(Request $request)
    {
        User::create($request->validate([
          'name' => ['required', 'max:50'],
          'email' => ['required', 'max:50', 'email'],
          'password' => ['required', 'alpha_num:ascii' ,'min:6', 'max:50'],
        ]));

        return redirect()->route('homePage');
    }

    public function loginPage() {
      return Inertia::render('User/Login', [
          'users' => User::all(),
        ]);
  }

}
