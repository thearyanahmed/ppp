<?php

namespace Thearyanahmed\Ppp;

use Exception;
use GuzzleHttp\Client;

class Request
{
    protected Client $client;
    protected string $baseUrl = 'https://api.purchasing-power-parity.com';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function fetchPPP(string $countryCodeIso) : SuccessResponse|ErrorResponse
    {
        $url = sprintf('%s/?target=%s', $this->baseUrl, urlencode($countryCodeIso));

        $response = $this->client->get($url);

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody()->getContents(), true);

            if(isset($data['message'])) {
                return new ErrorResponse($data);
            }

            return new SuccessResponse($data);
        }

        throw new Exception('unsuccessful request');
    }
}
