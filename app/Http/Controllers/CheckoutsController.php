<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\Payment;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('priority', 'asc')->get();
        return view('course.checkouts', compact('payments'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
      'name'  => 'required',
      'phone_no'  => 'required',
      'payment_method_id'  => 'required'
    ]);

    $order = new Orders();

    // check transaction ID has given or not
    if ($request->payment_method_id != 'cash_in') {
      if ($request->transaction_id == NULL || empty($request->transaction_id)) {
        session()->flash('sticky_error', 'Please give transaction ID for your payment');
        return back();
      }
    }

    $order->name = $request->name;
    $order->email = $request->email;
    $order->phone_no = $request->phone_no;
    $order->other_costs = $request->other_costs;
    $order->message = $request->message;
    $order->ip_address = request()->ip();
    $order->transaction_id = $request->transaction_id;
    if (Auth::check()) {
      $order->user_id = Auth::id();
    }



    $order->payment_id = Payment::where('short_name', $request->payment_method_id)->first()->id;
    $order->save();

    foreach (Cart::totalCarts() as $cart) {
      $cart->order_id = $order->id;
    }
    echo    $cart->save()?"Order Placement Success!":"Order Placement fail";
    /*session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');
    return view('common.about');*/
    }

    
}
