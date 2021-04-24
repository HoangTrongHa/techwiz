<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        
        return view('client.login.index');
    }

    public function login(Request $request) {

        if(Auth::check() === false ) {
            $validated = $request->validate([
                'code' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt(['code' => $request->code, 'password' => $request->password])) {
                Toastr::success('こんにちは'.Auth::user()->code, 'コーワ発表');
                return redirect()->route('myPage');
            }
            return redirect()->back()->withErrors(['カロママIDまたはパスワードが違います。']);
        }
        return redirect()->route('home');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }
}
