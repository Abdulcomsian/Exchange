<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tag;
use Slince\Shopify\Client;
use Slince\Shopify\Auth\OAuth;
use Slince\Shopify\ShopifyApp;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\PaymentIntent;
use Stripe\Exception\CardException;
use Stripe\Exception\InvalidRequestException;

class FrontController extends Controller
{
    public function categories($slug)
    {
        try {
//            $category = Category::with('stores')->where('slug', $slug)->first()->paginate(10);

            $category = Category::where('slug', $slug)->first();
            $stores = $category->stores()->paginate(10);
            return view('FrontEnd.single_category', compact('category', 'stores'));
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

    public function test()
    {

        /*$apiKey = "e134bd8828dfb68c99d53de545cf27b4";
        $apiSecret = "6132f492606fbc32b1ed761d60627cb1";
        $shopDomain = "exchange-accrual.myshopify.com";
        $redirectUri = redirect(route('shopify.callback'));*/


        $api_key = "bffeb228e6a03784f6e2b0503cf5123a";
        $password = "c182347b43d80adec5b732489ac33519";
        $access_token = "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";
        $store = "exchange-accrual4";

//        $url = "https://exchange-accrual.myshopify.com/admin/api/2021-01/products.json";
// Build the URL
        $url = "https://" . $api_key . ":" . $password . "@" . $store . ".myshopify.com/admin/api/2023-01/products.json";

// Initialize cURL
        $ch = curl_init();


// Set the URL
        curl_setopt($ch, CURLOPT_URL, $url);

// Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Perform the request and get the response
        $response = curl_exec($ch);

        dd($url);

// Decode the response as a JSON object
        $products = json_decode($response);

// Loop through the products
        foreach ($products->products as $product) {
            // Output the product title
            echo $product->title . "<br />";
        }

// Close the cURL handle
        curl_close($ch);


        /*$auth = new Auth($apiKey, $apiSecret, $shopDomain, $redirectUri);
        $installUrl = $auth->getInstallUrl();
        $accessToken = $auth->getAccessToken($code);


        $shopify = new PrivateApi($apiKey, $apiSecret, $shopDomain, $accessToken);

        $store = $shopify->get("/admin/shop.json");

        dd($store);

        $storeName = $store['shop']['name'];
        $storeEmail = $store['shop']['email'];*/

    }

    public function paymentIntent()
    {
        return view('stripe');
    }

    public function checkout(Request $request)
    {
        try {
            // Create a PaymentMethod

        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a PaymentMethod object from the Stripe token
        $paymentMethod = \Stripe\PaymentMethod::create([
            'type' => 'card',
            'card' => [
                'token' => $request->stripeToken,
            ],
        ]);

        // Create a PaymentIntent object and attach the PaymentMethod
        $paymentIntent = PaymentIntent::create([
            'amount' => 40*100, // $10 in cents
            'currency' => 'usd',
            'payment_method_types' => ['card'],
            'payment_method' => $paymentMethod->id,
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);


        if ($paymentIntent->status === 'requires_action' &&
            $paymentIntent->next_action->type === 'use_stripe_sdk') {
            // Send the client secret to the client to use in the PaymentIntents.confirm call
            return response()->json([
                'requires_action' => true,
                'payment_intent_client_secret' => $paymentIntent->client_secret
            ]);
        } else if ($paymentIntent->status === 'succeeded') {
            $store = Store::find(session('store_id'));
            $store->payment_status = 'completed';
            $store->save();
            // Return a JSON response to confirm payment
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid PaymentIntent status']);
        }

        } catch (CardException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ]);
        } catch (InvalidRequestException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
//https://api_key:api_secret@exchange-accrual4.myshopify.com/admin/api/2023-01/products.json
