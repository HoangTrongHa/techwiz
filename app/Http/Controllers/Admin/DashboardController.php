<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $users = User::all();

        $currentTime = date('Y-m-d', strtotime(Carbon::now()));
        
        return view('admin.dashboard.index', compact('users', 'currentTime'));
    }

    public function detail($param) {
        $user = User::where('code', $param)->first();

        $threeMonth = date('Y-m-d', strtotime($user->join_event . '+ 3 months'));
        $sixMonth = date('Y-m-d', strtotime($user->join_event . '+ 6 months'));
        $currentTime = date('Y-m-d', strtotime(Carbon::now()));

        return view('admin.dashboard.detail', compact('user', 'threeMonth', 'sixMonth', 'currentTime'));
    }

    public function postChecked($param) {
        $user = User::where('code', $param)->update([
            'join_event' => Carbon::now()
        ]);

        if ($user) {
            return redirect()->back();
        }
    }
}
