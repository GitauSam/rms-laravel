<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor\Dish;
use App\Models\Vendor\DishImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class VendorController extends Controller
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

    public function createDish() {
        return view('dashboard.vendor.add_dish');
    }

    public function storeDish(Request $request) {

        $imageStorageLocation = "storage/photos/dishes/";

        $request->validate([
            'dish_name' => 'required|max:255',
            'ingredients' => 'required',
            'price' => 'required|max:6',
            // 'photos.*'=>'required|file|image|mimes:jpg,jpeg,png'
        ]);

        try {

            $dish = Dish::create(
                    [
                        "name" => $request->dish_name,
                        "user_id" => auth()->user()->id,
                        "ingredients" => $request->ingredients,
                        "price" => $request->price,
                        "status" => 1
                    ]
                );

            foreach($request->photos as $photo) {
                $filename = time() . "-" . bin2hex(openssl_random_pseudo_bytes(16)) . "."  . $photo->getClientOriginalExtension();
                $image_storage_path = $imageStorageLocation . $filename;
                $photo->storeAs("public/photos/dishes/", $filename);
                Image::make(storage_path("app/public/photos/dishes/" . $filename))->resize(900, 600)->save();

                DishImage::create(
                    [
                        "dish_id" => $dish->id,
                        "image_url" => $image_storage_path,
                        "status" => 1
                    ]
                );
            }

            return redirect()
                        ->route('vendor.index-dishes')
                        ->with('status', 'Saved dish successfully');

        } catch (\Exception $e) {

            dump($e->getMessage());
            dd($e);

            return redirect()
                        ->route('vendor.index-dishes')
                        ->with('status', 'Problem occured while saving dish');

        }

        
    }

    public function indexDishes() {
        $dishes = Dish::where('user_id', '=', auth()->user()->id)
                        ->where('status', '=', 1)
                        ->get();
        return view('dashboard.vendor.index_dishes', 
                        [
                            "dishes" => $dishes
                        ]
                );
    }

    public function showDish($id) {
        $dish = Dish::find($id);

        return view(
                'dashboard.vendor.show_dish',
                [
                    "dish" => $dish
                ]
            );
    }

    public function editDish($id) {
        $dish = Dish::find($id);

        return view(
            'dashboard.vendor.update_dish',
            [
                "dish" => $dish
            ]
        );
    }

    public function updateDish($id, Request $request) {

        $request->validate([
            'dish_name' => 'required|max:255',
            'ingredients' => 'required',
            'price' => 'required|max:6',
            // 'photos.*'=>'required|file|image|mimes:jpg,jpeg,png'
        ]);
        
        $dish = Dish::find($id);

        $dish->name = $request->dish_name;
        $dish->ingredients = $request->ingredients;
        $dish->price = $request->price;

        $dish->save();

        return redirect()->route('vendor.index-dishes')->with('status', 'Dish updated successfully');
    }
}
