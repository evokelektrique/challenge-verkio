<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    private $users;

    public function __construct(User $users) {
        $this->users = $users;
    }

    public function index() {
        if(Auth::check()) {
            return redirect("dashboard");
        }

        return view("login");
    }

    public function create(Request $request) {
        $fields = $request->validate([
            "email" => "required|string|max:255",
            "password" => "required|string",
        ]);

        // Attempt login user
        if (Auth::attempt($fields)) {
            // $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('error', 'Wrong credentials, please try again.');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->back()->with('success', 'Successfully logged out');
    }
}
