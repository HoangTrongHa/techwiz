<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\client\Question;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
       return view("client.home");
    }

    public function redirectToMyPage()
    {
        $user = Auth::user();
        $currentTime = Carbon::now();
        $join_event = date('Y-m-d', strtotime($user->join_event));
        $threeMonth = date('Y-m-d', strtotime($join_event . '+ 3 months'));
        $sixMonth = date('Y-m-d', strtotime($join_event . '+ 6 months')); 
        return view("client.mypage.index", compact('currentTime', 'join_event', 'threeMonth', 'sixMonth'));
    }

    private function diffTime()
    {
        $getTime = Auth::user()->join_event;
        if ($getTime == null) {
           return 0;
        } 
        $getTimeNow = Carbon::now();
        $ts1 = strtotime($getTime);
        $ts2 = strtotime($getTimeNow);
        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);
        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);
        return (($year2 - $year1) * 12) + ($month2 - $month1);
    }
}
