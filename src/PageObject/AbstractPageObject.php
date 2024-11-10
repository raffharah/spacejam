<?php

namespace Forseti\SpaceJeam\PageObject;

use Exception;
use Forseti\SpaceJeam\Factory\GuzzleClientFactory;
use Forseti\SpaceJeam\Traits\ForsetiLoggerTrait;
use GuzzleHttp\ClientInterface;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client) ? $client : GuzzleClientFactory::getInstance();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (Exception $error) {
            $this->error($error->getMessage());
            return null;
        }
    }
}