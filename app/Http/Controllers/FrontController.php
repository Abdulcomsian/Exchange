<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Models\Tag;
use Slince\Shopify\Client;
use Slince\Shopify\Auth\OAuth;
use Slince\Shopify\ShopifyApp;

class FrontController extends Controller
{
    public function categories($slug)
    {
        try {
//            $category = Category::with('stores')->where('slug', $slug)->first()->paginate(10);
            $category = Category::where('slug', $slug)->first();
            $stores = $category->stores()->paginate(10);
            return view('FrontEnd.single_category', compact('category','stores'));
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

      /*  $apiKey = "e134bd8828dfb68c99d53de545cf27b4";
        $apiSecret = "6132f492606fbc32b1ed761d60627cb1";
        $shopDomain = "exchange-accrual.myshopify.com";
//        $redirectUri = redirect(route('shopify.callback'));

        // Step 2: Authenticate with the API
        $accessToken = getAccessToken($apiKey, $apiPassword, $storeUrl);
        $scopes = ["read_products", "write_products"];
//        $redirectUri = "https://your-app.com/auth/callback";
        $installationUrl = ShopifyApp::createAuthUrl($shopDomain, $apiKey, $scopes, $redirectUri);
        header("Location: $installationUrl");
        exit;

        $auth = new OAuth($shopDomain, $apiKey, $apiSecret, $redirectUri);
        $installUrl = $auth->getAuthorizeUrl();

        dd($installUrl);

        $accessToken = $shopifyAuth->getAccessToken($_GET['code']);
        dd($accessToken);*/

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
