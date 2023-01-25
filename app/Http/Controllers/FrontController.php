<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
use App\Models\Tag;

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
        $store = Store::with('tags')->findorfail($id);
        return view('FrontEnd.single_store', compact('store'));
    }

    public function home()
    {
        $stores = Store::where('status', 'approved')->orderBy('created_at', 'desc')->take(3)->get();
        $featured_business = Store::where('status', 'approved')->take(3)->get();
        return view('FrontEnd.index', ['stores' => $stores, 'featured_business' => $featured_business]);
    }

    public function allBusiness(Request $request)
    {
        $stores = filterStores($request);

        return view('FrontEnd.all-business', ['stores' => $stores]);
    }

    public function applyFilter(Request $request)
    {
        $search = $request->get('search');
        $stores = Store::whereHas('category', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->orWhere('store_name', 'like', '%' . $search . '%')
            ->get();

        return view('FrontEnd.all-business', compact('stores'));
    }

    public function tags()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }
}
