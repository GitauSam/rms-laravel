<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer\Buyer;
use App\Models\Vendor\Dish;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::where('status', '=', 1)->get();
        return view(
            'dashboard.buyer.index_dishes',
            [
                'dishes' => $dishes
            ]
        );
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Buyer::find($id);
        
        return view(
            'dashboard.buyer.show_vendor',
            [
                "order" => $order
            ]
        );
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

    public function storeOrder($id) {
        Buyer::create(
                [
                    "user_id" => auth()->user()->id,
                    "dish_id" => $id,
                    "status" => 1
                ]
            );

        return redirect()->route('dishes.orders')->with("Order created successfully");
    }

    public function indexOrders() {
        $orders = Buyer::where([
            ['user_id', '=', auth()->user()->id],
            ['status', '=', 1]
        ])
        ->get();

        return view(
            'dashboard.buyer.index_orders', 
            [
                "orders" => $orders
            ]
        );
    }

    public function showOrder($id)
    {
        $order = Buyer::find($id);
        
        return view(
            'dashboard.buyer.show_vendor',
            [
                "order" => $order
            ]
        );
    }
}
