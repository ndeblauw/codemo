<?php

namespace App\Action;

use Illuminate\Support\Facades\Http;

class QuoteService
{
    public function getQuote()
    {
        return cache()->remember('quote', 3600, fn() => $this->getQuoteFromApi());
    }

    public function getQuoteFromApi()
    {
        try {
            sleep(5);
            $response = Http::withHeaders(['X-Api-Key' => config('app.api_ninjas_key')])
                ->get('https://api.api-ninjas.com/v1/quotes');

            return json_decode($response->body())[0];
        } catch (\Exception $e) {
            return (object)[
                'quote' => 'Better to be save when working with APIs',
                'author' => 'Nico Deblauwe',
                'category' => 'Backup',
            ];
        }
    }

}
