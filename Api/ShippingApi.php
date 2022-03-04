<?php

namespace LaravelKangu\Api;

use LaravelKangu\Api;
use LaravelKangu\Configuration;

class ShippingApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function createCharge(array $data)
    {
        $path = 'simular';
        return $this->post($this->configuration->getAccessToken(), $path, $data);
    }
}
