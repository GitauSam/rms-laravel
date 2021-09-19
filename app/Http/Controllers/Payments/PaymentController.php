<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Http\Integrations\LipaNaMpesa;
use App\Models\Payments\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $lipaNaMpesa = new LipaNaMpesa();
            
            if ($lipaNaMpesa->pay($request->amount, '495632184', $request->order_id, $request->vendor_id) == '30') {
                return redirect()->route('dishes.orders')->with("Order confirmed");
            }

        } catch (\Exception $e) {
            Log::debug("Exception occurred when attempting to pay with mpesa");
            Log::debug("Cause: " . $e->getMessage());
            return redirect()->route('dishes.orders')->with("Unable to confirm order");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payDish(Request $request)
    {
        // dd($request->all());

        try {
            $lipaNaMpesa = new LipaNaMpesa();
            
            if ($lipaNaMpesa->pay($request->amount, '495632184', $request->order_id, $request->vendor_id) == '30') {
                return redirect()->route('dishes.orders')->with("Order confirmed");
            }

        } catch (\Exception $e) {
            Log::debug("Exception occurred when attempting to pay with mpesa");
            Log::debug("Cause: " . $e->getMessage());
            return redirect()->route('dishes.orders')->with("Unable to confirm order");
        }
    }

    public function processCallbackResponse(Request $request) {

        Log::debug('breakpoint 201');
        
        $validated = $request->validate([
            'Body' => 'required',
            'Body.stkCallback' => 'required',
            'Body.stkCallback.MerchantRequestID' => 'required|max:255',
            'Body.stkCallback.CheckoutRequestID' => 'required|max:255',
            'Body.stkCallback.ResultCode' => 'required',
            'Body.stkCallback.ResultDesc' => 'required|max:255',
        ]);

        Log::debug('breakpoint 202');

        $payment = Payment::where('mpesa_merchant_response_id', '=', $validated['Body']['stkCallback']['MerchantRequestID'])
                            ->where('mpesa_checkout_response_id', '=', $validated['Body']['stkCallback']['CheckoutRequestID'])
                            ->first();

        Log::debug('breakpoint 203');

        $payment->mpesa_callback_merchant_response_id = $validated['Body']['stkCallback']['MerchantRequestID'];
        $payment->mpesa_callback_checkout_response_id = $validated['Body']['stkCallback']['CheckoutRequestID'];
        $payment->mpesa_callback_result_code = $validated['Body']['stkCallback']['ResultCode'];
        $payment->mpesa_callback_result_desc = $validated['Body']['stkCallback']['ResultDesc'];
        $payment->mpesa_callback_response = json_encode($validated);
        $payment->mpesa_callback_response_transaction_date = Carbon::now()->format('Y-m-d H:i:s');

        if ($validated['Body']['stkCallback']['ResultCode'] == 0) {
            $payment->status = 1;
            $payment->buyer->purchased = 1;
        }

        Log::debug('breakpoint 204');

        $payment->save();

        Log::debug('breakpoint 205');

        Log::debug('breakpoint 206');
        $payment->buyer->save();

        Log::debug('breakpoint 207');
    }
}
