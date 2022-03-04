<?php

namespace LaravelKangu;

class Configuration
{

    private $access_token;


    public function __construct(array $config)
    {
        $this->url = config('pagseguro.sandbox') ? config('pagseguro.host.soap_sandbox') : config('pagseguro.host.soap_production');

        $this->token = $config['token'] ?? null;

        !empty($this->access_token) ? $this->setToken($this->access_token) : throw new \Exception('Access token is required');
    }


    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}
