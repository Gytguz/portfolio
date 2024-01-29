<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;




class UserController extends Controller
{
    public function registerPage() {
        return Inertia::render('User/Register');
    }

    public function registerStore(RegisterRequest $request)
    {
        $formFields = $request->validated();

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return to_route('homePage');
    }

    public function loginPage() {
      return Inertia::render('User/Login', [
        ]);
     }

     public function authenticate(Request $request){
      $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'alpha_num:ascii'],
      ]);

      if(auth()->attempt($formFields)){
        $request->session()->regenerate();
        
        return to_route('homePage')->with('message', 'Logged in successfully');
      }
     }

     public function logout() {
        auth()->logout();
        return to_route('homePage')->with('message', 'Logged out successfully');
     }

     public function test() {
        $user = auth()->user();
        return $user;
     }


     public function dashboardPage() {
        return Inertia::render('User/Dashboard');
      }

}
