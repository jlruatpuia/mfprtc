<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Session;

class PaymentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function initiate(Request $request) {
        //dd(json_encode(session('cart')));
        $user_id = Auth::user()->id;
        $amount = $request->input('amount');

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $order = $api->order->create(array('receipt' => '123', 'amount' => $amount*100, 'currency' => 'INR'));
        $orderId = $order->id;

        $payment = new Payment();
        $payment->user_id = $user_id;
        $payment->amount = $amount;
        $payment->payment_id = $orderId;
        $payment->save();

        $orders = new Order();
        $orders->user_id = $user_id;
        $orders->order_date = Carbon::now();
        $orders->payment_id = $orderId;
        $orders->amount = $amount;
        $itemsArray = [];
        foreach (session('cart') as $key => $item){
//            $element =;
            $element['id'] = $item['id'];
            $element['name'] = $item['name'];
            $element['price'] = $item['price'];
            $element['quantity'] = $item['quantity'];

            $itemsArray[] = $element;
        }
        $orders->items = json_encode($itemsArray);
        $orders->save();

        $data = array('order_id' => $orderId, 'amount' => $amount);
        Session::put('order_id', $orderId);
        Session::put('amount', $amount);

        return view('payments.initiate');

//        return redirect()->route('initiate-payment')->with('data', $data);
    }

    public function payment(Request  $request) {
        $data = $request->all();
        //dd($data);
        $payment = Payment::where('payment_id', $data['razorpay_order_id'])->first();
        $payment->payment_status = true;
        $payment->razorpay_id = $data['razorpay_payment_id'];

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        try {
            $attr = array(
              'razorpay_signature' => $data['razorpay_signature'],
              'razorpay_payment_id' => $data['razorpay_payment_id'],
              'razorpay_order_id' => $data['razorpay_order_id'],
            );

            $order = $api->utility->verifyPaymentSignature($attr);
            $success = true;
        } catch (SignatureVerificationError $e) {
            $success = false;
        }

        if($success) {
            $payment->save();
            Session::forget('cart');
            Session::forget('order_id');
            Session::forget('amount');
            return view('payments.success');
        } else {
            return redirect()->route('error');
        }
    }
}
