<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    public function categories($slug)
    {
        try {
            $category = Category::with('stores')->where('slug', $slug)->first();
            return view('FrontEnd.single_category', compact('category'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function browse_all()
    {
        $stores = Store::all();
        return view('FrontEnd.all-business', compact('stores'));
    }

    public function single_business($id)
    {
        $store = Store::find($id);
        return view('FrontEnd.single-business', compact('store'));
    }

    public function sell_your_business()
    {
        return view('FrontEnd.createStore');
    }

    public function edit_sell_your_business($id)
    {
        $store = Store::find($id);
        return view('FrontEnd.createStore', compact('store'));
    }

    public function dashboard()
    {
        $stores = Store::where('user_id', Auth::user()->id)->latest()->get();
        return view('FrontEnd.storeListing', ['stores' => $stores]);
    }

    public function singleStore($id)
    {
        $store = Store::findorfail($id);
        return view('FrontEnd.single_store', compact('store'));
    }

    public function home()
    {
        $stores = Store::where('status', 'approved')->take(3)->get();
        return view('FrontEnd.index', ['stores' => $stores]);
    }

    public function allBusiness(Request $request)
    {
        $query = Store::query();

        if ($request->has('price')) {
            $price = $request->get('price');
            if (in_array('0-500', $price)) {
                $query->orWhereBetween('price', [0, 500]);
            }
            if (in_array('500-1000', $price)) {
                $query->orWhereBetween('price', [500, 1000]);
            }
            if (in_array('1000-2500', $price)) {
                $query->orWhereBetween('price', [1000, 2500]);
            }
            if (in_array('2500-5000', $price)) {
                $query->orWhereBetween('price', [2500, 5000]);
            }
            if (in_array('5000-10000', $price)) {
                $query->orWhereBetween('price', [5000, 10000]);
            }
            if (in_array('10000-25000', $price)) {
                $query->orWhereBetween('price', [10000, 25000]);
            }
        }

        if ($request->has('revenue')) {
            $revenue = $request->get('revenue');
            if (in_array('0-500', $revenue)) {
                $query->orWhereBetween('revenue', [0, 500]);
            }
            if (in_array('500-2500', $revenue)) {
                $query->orWhereBetween('revenue', [500, 1000]);
            }
            if (in_array('2500-15000', $revenue)) {
                $query->orWhereBetween('revenue', [1000, 2500]);
            }
            if (in_array('15000', $revenue)) {
                $query->orWhere('price', '>', 15000);
            }
        }

        $categories = Category::all();
        if ($request->has('industry')) {
            $industry = $request->get('industry');
            foreach ($categories as $cateogry) {
                if (in_array($cateogry->id, $industry)) {
                    $query->orWhere('category_id', $cateogry->id);
                }
            }
        }

        $stores = $query->where('status', 'approved')->latest()->get();

        return view('FrontEnd.all-business', ['stores' => $stores]);
    }

    /*    public function applyFilter(){
            return view('FrontEnd.all-business',compact('stores'));
        }*/
}
