<?php

namespace App\Services;

class ShopifyService
{
    private $accessToken;
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config("services.shopify.shop_domain");
        $this->accessToken = config("services.shopify.access_token");
    }
}
