<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersController extends Controller {
    private $users;

    public function __construct(User $users) {
        $this->users = $users;
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

        return redirect()->back()->with('success', 'User succesfully created');
    }
}
