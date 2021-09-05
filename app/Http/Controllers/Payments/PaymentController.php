<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Http\Integrations\LipaNaMpesa;
use Illuminate\Http\Request;
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

    }
}
