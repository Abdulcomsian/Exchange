<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class FrontController extends Controller
{
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
}
