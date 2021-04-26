<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function makePayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            'stripeToken' => 'required',
            'amount' => 'required',
        ]);
        $input = $request->all();
        if ($validator->passes()) {
            $input = array_except($input, array('_token'));
            Stripe\Stripe::setApiKey(config('app.stripe_secret'));
            try {
                Stripe\Charge::create([
                    "amount" => $request->amount,
                    "currency" => "VND",
                    "source" => $request->stripeToken,
                    "description" => "Make payment and chill."
                ]);
                Session::flash('success', 'Payment successfully made.');
            } catch (Exception $e) {
                Session::flash('error',$e->getMessage());
            }
        }

        return back();
    }
}