<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    private $users;

    public function __construct(User $users) {
        $this->users = $users;
    }

    public function index() {
        return view("register");
    }

    public function create(Request $request) {
        // Validate user
        $fields = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "email" => "required|string|max:255|unique:users,email",
            "password" => "required|string|confirmed",
        ]);

        // Create user
        $user = new $this->users();
        $user->first_name = $fields["first_name"];
        $user->last_name = $fields["last_name"];
        $user->email = $fields["email"];
        $user->password = Hash::make($fields["password"]);
        $user->save();

        // if (Auth::attempt($fields)) {
        //     $request->session()->regenerate();
        // }
        //
        // We don't want them to authenticate, only admins have
        // access to the dashboard routes
        return redirect()->intended('home');
    }
}
