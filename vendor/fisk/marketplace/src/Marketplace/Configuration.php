<?php

namespace Marketplace;


use Prophecy\Exception\InvalidArgumentException;

class Configuration {
    const API_KEY = "apikey";
    const BASE_API_URL = "api_root_url";

    private $settings = [
        self::BASE_API_URL => "https://marketplace.tf/api",
        self::API_KEY => ""
    ];

    public function __construct(array $settings = []) {
        foreach ($settings as $key => $value) {
            if (!isset($this->settings[$key])) {
                $message = "{$key} is not a valid configuration setting.";
                throw new InvalidArgumentException($message);
            }

            $this->settings[$key] = $value;
        }
    }

    public function getBaseApiUrl(): string {
        return $this->settings[self::BASE_API_URL];
    }

    public function getApiKey(): string {
        return $this->settings[self::API_KEY];
    }
}