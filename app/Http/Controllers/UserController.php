<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view() {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        return view('users.profile')
            -> with('user', $user)
            -> with('orders', $orders);
    }

    public function address() {
        $user = Auth::user();
        return view('users.add_address') -> with ('user', $user);
    }

    public function add_address(Request $request) {
        $rules = [
            'full_name' => 'required',
            'mobile_no' => 'required',
            'pin_code' => 'required',
            'house_no' => 'required',
            'village' => 'required',
            'town' => 'required',
        ];

        $customMessage = [
            'full_name.required' => 'Please enter Full Name',
            'mobile_no.required' => 'Please enter Mobile No',
            'pin_code.required' => 'Please enter PIN Code',
            'house_no.required' => 'Please enter House/Flat/Apartment No',
            'village.required' => 'Please enter Area/Colony/Street/Sector/Village',
            'town.required' => 'Please enter Town/City',
        ];
        $this->validate($request, $rules, $customMessage);

        $address = new Address();
        $address->user_id = Auth::user()->id;
        $address->full_name = $request->full_name;
        $address->mobile_no = $request->mobile_no;
        $address->pin_code = $request->pin_code;
        $address->house_no = $request->house_no;
        $address->village = $request->village;
        $address->city = $request->town;
        $address->state = 'MIZORAM';
        //dd($address);
        $address->save();

        return redirect()->back();
    }

    public function edit_address() {
        $user = Auth::user();
        $addr = Address::where('user_id', $user->id)->first();
//        $orders = Order::where('user_id', $user->id)->get();
        return view('users.edit_address')
            -> with('address', $addr);
//            -> with('orders', $orders);
    }

    public function update_address(Request $request, $id) {
        //dd($request->all());
        $rules = [
            'full_name' => 'required',
            'mobile_no' => 'required',
            'pin_code' => 'required',
            'house_no' => 'required',
            'village' => 'required',
            'town' => 'required',
        ];

        $customMessage = [
            'full_name.required' => 'Please enter Full Name',
            'mobile_no.required' => 'Please enter Mobile No',
            'pin_code.required' => 'Please enter PIN Code',
            'house_no.required' => 'Please enter House/Flat/Apartment No',
            'village.required' => 'Please enter Area/Colony/Street/Sector/Village',
            'town.required' => 'Please enter Town/City',
        ];
        $this->validate($request, $rules, $customMessage);

        $address = Address::find($id);
        $address->full_name = $request->full_name;
        $address->mobile_no = $request->mobile_no;
        $address->pin_code = $request->pin_code;
        $address->house_no = $request->house_no;
        $address->village = $request->village;
        $address->city = $request->town;

        $address->save();

        return redirect()->route('user-profile');
        Session::flash('success', 'Address updated successfully');
    }

    public function orders($id) {

        //dd(session('cart'));
        $order = Order::where('payment_id', $id)
            -> where('user_id', Auth::user()->id)
            -> get();
        //dd($order);
        return view('orders.index') -> with('orders', $order);
    }
}
