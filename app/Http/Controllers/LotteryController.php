<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lottery;
use Illuminate\Support\Facades\Auth;

class LotteryController extends Controller {
    private $users;
    private $lottery;

    public function __construct(User $users, Lottery $lottery) {
        $this->users = $users;
        $this->lottery = $lottery;
    }

    public function create(Request $request) {
        // Find random user
        $user = $this->users::inRandomOrder()->first();

        // Check if it exists
        $find_lottery = $this->lottery::where("user_id", $user->id)->first();

        if($find_lottery) {
            return redirect()->back()->with('error', 'User already has participated in lottery with "'. $user->first_name . " " . $user->last_name . '"');
        }

        $lottery = new $this->lottery();
        $lottery->user_id = $user->id;
        $lottery->save();

        return redirect()->back()->with('success', 'User successfully won the lottery with "'. $user->first_name . " " . $user->last_name . '"');
    }
}
