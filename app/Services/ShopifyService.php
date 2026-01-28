<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ShopifyService
{
    private $accessToken;
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config("services.shopify.shop_domain");
        $this->accessToken = config("services.shopify.access_token");
    }

    public function getProducts()
    {
        $response = Http::get();
    }
}
