<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Buyer\Buyer;
use App\Models\User;
use App\Models\Vendor\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesCount = 0;
        $pendingOrders = 0;
        $pendingOrdersData = [];
        $totalUsers = 0;
        $vendorCount = 0;
        $userCount = 0;

        if (auth()->user()->hasRole('user')) {
            return redirect('dishes');
        }

        $unpurchasedOrders = Buyer::where('purchased', '=', '0')->get();
        $purchasedOrders = Buyer::where('purchased', '=', '1')->get();

        $totalUsers = User::all()->except(auth()->user()->id)->count();

        foreach($unpurchasedOrders as $uo) {
            if ($uo->dish->vendor->id == auth()->user()->id) {
                $pendingOrders++;

                array_push($pendingOrdersData, $uo->user->name . ': ' . $uo->dish->name);
            }
        }

        foreach($purchasedOrders as $po) {
            if ($po->dish->vendor->id == auth()->user()->id) {
                $salesCount++;
            }
        }

        foreach(User::all()->except(Auth::user()->id) as $u)  {
            if ($u->hasRole('vendor')) {
                $vendorCount++;
            } else if ($u->hasRole('user')) {
                $userCount++;
            }
        }

        return view(
            'dashboard', 
            [
                'vendorCount' => $vendorCount,
                'userCount' => $userCount,
                'totalUsers' => $totalUsers,
                'pendingOrders' => $pendingOrders,
                'salesCount' => $salesCount,
                'pendingOrdersData' => $pendingOrdersData
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

    public function createVendor() {
        return view('dashboard.add_vendor');
    }

    public function storeVendor(Request $request) {
        
        $validated = $request;

        $user = User::create([
            'name' => $validated['customer_name'],
            'email' => $validated['customer_email'],
            'phone_number' => $validated['customer_phone_number'],
            'id_number' => $validated['customer_id_number'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->assignRole('vendor');

        Vendor::create([
            'vendor_name' => $validated['vendor_name'],
            'status' => 1,
            'user_id' => $user->id
        ]);

        return redirect()->route('dashboard.index');
    }

    public function indexVendors() {

        return view(
            'dashboard.index_vendor',
            [
                "vendors" => Vendor::where('status', '=', 1)->get()
            ]
        );
    }

    public function showVendor($id) {
        return view(
            'dashboard.show_vendor',
            [
                "vendor" => Vendor::find($id),
            ]
            );
    }

    public function deactivateVendor($id) {
        $vendor = Vendor::find($id);
        $vendor->status = 0;
        $vendor->save();

        $vendor->customer->status = 0;
        $vendor->customer->save();

        return redirect()->route('dashboard.show-vendor', $id);
    }
}
