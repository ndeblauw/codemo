<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    public function preparePayment(Article $article)
    {
        $webhook = config('app.env' === 'production')
            ? route('webhooks.mollie')
            : 'https://ar3qoqcixc.sharedwithexpose.com/api/order/webhook';

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Order of article {$article->id}: {$article->title}",
            "redirectUrl" => route('order.success', ['article' => $article->id]),
            "webhookUrl" => $webhook,
            "metadata" => [
                "order_id" => "12345",
                "article_id" => $article->id,
            ],
        ]);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function success(Article $article)
    {
        sleep(2); // Simulate some processing time

        return redirect()->route('articles.show', $article);
    }

    public function webhook(Request $request)
    {
        $paymentId = $request->input('id');
        $payment = Mollie::api()->payments->get($paymentId);

        dump($payment);

        if ($payment->isPaid())
        {
            // Do your thing ...
            $metadata = $payment->metadata;

            $article = Article::find($metadata->article_id);
            $article->update([
                'sponsored' => true,
            ]);

        }


    }
}
