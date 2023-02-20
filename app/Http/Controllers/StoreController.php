<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Tag;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

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
        if($request->edit_form == null){
            $validatedData = $request->validate([
                'store_address' => 'required|max:500',
                'store_name' => 'required|max:500',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        } else {
            $validatedData = $request->validate([
                'store_address' => 'required|max:500',
                'store_name' => 'required|max:500',
            ]);
        }

        if($request->edit_form == null){
            $store = new Store();
        } else {
            $store = Store::findorfail($request->edit_form);
        }
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/';
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move($destinationPath, $filename);
            $store->image = $filename;
        }
        $store->store_address = $request->store_address;
        $store->store_name = $request->store_name;
        $store->user_id = Auth::user()->id;
        $store->save();
        session(['store_id' => $store->id]);

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'business_story' => 'required|max:3000',
        ]);
        $store = Store::find(session('store_id'));
        $store->business_story = $request->business_story;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }

    public function stepThree(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:3000',
        ]);

        $store = Store::find(session('store_id'));
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
            'other_detail' => 'required|max:3000',
        ]);

        $store = Store::find(session('store_id'));
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
            'shopify_plan' => 'required|max:500',
            'inventory_warehouse' => 'required|max:500',
            'domain' => 'required|max:500'
        ]);

        $store = Store::find(session('store_id'));
        $store->shopify_plan = $request->shopify_plan;
        $store->inventory_warehouse = $request->inventory_warehouse;
        $store->domain = $request->domain;
        $store->save();

        return response()->json(['success' => 'Data is successfully added']);

    }
    public function stepSix(Request $request)
    {
        $validatedData = $request->validate([
            'sale_include_1' => 'required|max:500',
            'sale_include_2' => 'required|max:500',
            'sale_include_3' => 'required|max:500',
            'sale_include_4' => 'required|max:500',
            'price' => 'required|max:500',
            'category' => 'required|max:500',
            'tags' => 'required|max:500',
        ]);

        $store = Store::find(session('store_id'));
        $store->sale_include_1 = $request->sale_include_1;
        $store->sale_include_2 = $request->sale_include_2;
        $store->sale_include_3 = $request->sale_include_3;
        $store->sale_include_4 = $request->sale_include_4;
        $store->price = $request->price;
        $store->category_id = $request->category;
        $store->form_status = 'completed';
        $store->save();
//        $store->tags->destroy();
//        $tagsArray = explode(',', $request->tags);
        foreach($request->tags as $key=>$value)
        {
            $tag = Tag::find($key);
            if($tag){
                $tag->delete();
            }
            $tags= Tag::create([
                'store_id'=> $store->id,
                'name'=> $value
            ]);
        }
        session(['store_id' => $store->id]);
//        session()->forget('store_id');


        return response()->json(['success' => 'Data is successfully added','store_id'=>$store->id]);

    }

    /*public function stepSeven(Request $request)
    {
        $store = Store::find(session('store_id'));
        if($store->payment_status != 'completed'){
            $validatedData = $request->validate([
                'payment_status' => 'required|max:500',
            ]);
        }
        return response()->json(['success' => 'Data is successfully added']);
    }*/


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
