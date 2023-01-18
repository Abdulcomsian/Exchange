<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function categories($slug)
    {
        try {
            $category = Category::with('stores')->where('slug', $slug)->first();
            return view('FrontEnd.single_category', compact('category'));
        }
        catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function browse_all(){
        $stores= Store::all();
        return view('FrontEnd.all-business', compact('stores'));
    }

    public function single_business($id){
        $store= Store::find($id);
        return view('FrontEnd.single-business',compact('store'));
    }

    public function sell_your_business(){
        return view('FrontEnd.createStore');
    }

    public function dashboard(){
        $stores = Store::get();
        return view('FrontEnd.storeListing',['stores'=>$stores]);
    }

    public function singleStore($id){
        $store = Store::findorfail($id);
        return view('FrontEnd.single_store',compact('store'));
    }
}
