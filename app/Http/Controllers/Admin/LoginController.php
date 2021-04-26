<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [

                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        return redirect()->back()->withErrors(['The ID or password is incorrect。']);
    }
}
