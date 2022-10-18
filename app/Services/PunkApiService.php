<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PunkApiService
{
    public function getBeers()
    {
        return Http::punkapi()->get('/beers');
    }
}