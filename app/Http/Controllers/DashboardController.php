<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function index() {
        $users = User::all()->except(Auth::id())->sortByDesc("id");
        return view("dashboard.index", ["users" => $users]);
    }

    public function new_user(Request $request) {
        return view("dashboard.new_user");
    }

    public function lottery(Request $request) {
        return view("dashboard.lottery");
    }

    // protected function redirectTo($request) {
    //     return route('test');
    // }
}
