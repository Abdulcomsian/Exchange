<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
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
        $input = $request->all();
        if ($request->hasFile('image')) {
            $destinationPath = 'storeImage/';
            $productImage = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move($destinationPath, $productImage);
            $input['image'] = $productImage;
        }
        $store = Store::create($input);

        foreach($request->tagnames as $name)
        {
            $tags= Tag::create([
                'store_id'=> $store->id,
                'name'=> $name
            ]);
        }

        return redirect()->back();
    }

    public function stepOne(Request $request)
    {
        $validatedData = $request->validate([
            'store_address' => 'required|max:500',
        ]);

        $store = new Store();
        $store->store_address = $request->store_address;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'business_story' => 'required|max:500',
        ]);

        $store = Store::find(1);
        $store->business_story = $request->business_story;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepThree(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'description' => 'required|max:500',
        ]);

        $store = Store::find(1);
        $store->description = $request->description;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepFour(Request $request)
    {
        $validatedData = $request->validate([
            'revenue' => 'required|max:500',
            'session' => 'required|max:500',
            'profit' => 'required|max:500',
            'inventory_value' => 'required|max:500',
            'other_detail' => 'required|max:500',
        ]);

        $store = Store::find(1);
        $store->revenue = $request->revenue;
        $store->session = $request->session;
        $store->profit = $request->profit;
        $store->inventory_value = $request->inventory_value;
        $store->other_detail = $request->other_detail;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepFive(Request $request)
    {
        $validatedData = $request->validate([
            'business_story' => 'required|max:500',
        ]);

        $store = Store::find(1);
        $store->business_story = $request->business_story;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
