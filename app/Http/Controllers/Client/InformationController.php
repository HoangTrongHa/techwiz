<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\client\Prefectures;
use App\Http\Controllers\Controller;
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
        session()->put('dataInfor',$request->all());
        return redirect()->route('confirmInformation');
    }

    public function updateUser()
    {
        
    }
}
