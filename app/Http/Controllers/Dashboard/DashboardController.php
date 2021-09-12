<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor\Vendor;
use Illuminate\Http\Request;
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
        return view('dashboard');
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
