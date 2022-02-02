<?php

namespace Numary\Ledger\Cloud;

use GuzzleHttp\Client;

class TokenFetcher
{

    static $endpointStaging = "https://api.staging.numary.cloud/auth/authenticate/tokens";
    static $endpointProd = "https://api.numary.cloud/auth/authenticate/tokens";

    protected $url = '';
    protected $token = '';
    /**
     * @var Client
     */
    protected $client;

    /**
     * @param $url string url of the auth endpoint
     * @param $token string
     * @param Client|NULL $client http client
     */
    public function __construct(string $url, string $token, Client $client = NULL)
    {
        if ($client == NULL) {
            $client = new Client();
        }
        $this->client = $client;
        $this->url = $url;
        $this->token = $token;
    }

    /**
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchToken(): string
    {
        $ret = $this->client->post($this->url, [
            "headers" => [
                "Content-Type" => "application/json",
            ],
            "json" => [
                "strategy" => "m2m",
                "token" => $this->token
            ]
        ]);
        return json_decode($ret->getBody())->data->jwt;
    }
}