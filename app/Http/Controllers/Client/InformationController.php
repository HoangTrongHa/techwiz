<?php

namespace App\Http\Controllers\Client;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\client\Prefectures;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    public function index()
    {
        if(empty(Auth::user()->term_of_service)) {
            return redirect()->route('term');
        }
        $dataPrefectures = Prefectures::get();
        return view("client.information.index",compact('dataPrefectures'));
    }

    public function postInfor (Request $request) {
       
    }

    public function editInformation($id)
    {
        return view('client.information.editProfile');
    }

    public function postEditInformation($id,Request $request) {
        
        $user = User::findOrFail($id)->update([
           'name' => $request->first_name,
            'phone_number' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Toastr::success('Cập nhật thành công','Thông Báo');
        return redirect()->route('home');
    }
}
