<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;

class PaypalController extends Controller
{
    private $apiContext;
    private $client_id;
    private $secret;

    public function __construct()
    {
        $this->client_id = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential($this->client_id, $this->secret)
        );

        $this->apiContext->setConfig([
            'mode' => env('PAYPAL_MODE'),
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'DEBUG'
        ]);
    }

    public function payWithPaypal()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item1 = new Item();
        $item1->setName('Item 1')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(10);

        $item2 = new Item();
        $item2->setName('Item 2')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(5);

        $itemList = new ItemList();
        $itemList->setItems([$item1, $item2]);

        $details = new Details();
        $details->setSubtotal(15);

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal(15)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Payment description')
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment-success'))
            ->setCancelUrl(route('payment-cancel'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        try {
            $payment->create($this->apiContext);
            $redirectUrl = $payment->getApprovalLink();
            return redirect()->away($redirectUrl);
        } catch (\Exception $ex) {
            return redirect()->route('payment-cancel')->with('error', 'Payment failed!');
        }
    }

    public function paymentSuccess(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        $payment = Payment::get($paymentId, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            $result = $payment->execute($execution, $this->apiContext);

            if ($result->getState() == 'approved') {
                return redirect()->route('dashboard')->with('success', 'Payment completed successfully!');
            } else {
                return redirect()->route('payment-cancel')->with('error', 'Payment failed!');
            }
        } catch (\Exception $ex) {
            return redirect()->route('payment-cancel')->with('error', 'Payment failed!');
        }
    }

}
