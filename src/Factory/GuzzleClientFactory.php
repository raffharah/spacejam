<?php

namespace Forseti\SpaceJeam\Factory;

use Forseti\SpaceJeam\Enum\Url;
use GuzzleHttp\Client;

class GuzzleClientFactory
{
    public static function getInstance()
    {
        $config = [
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => Url::USER_AGENT
            ]
        ];
        return new Client($config);
    }
}