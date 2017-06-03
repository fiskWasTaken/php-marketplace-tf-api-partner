<?php

namespace Marketplace\Command\Seller;


use Marketplace\Command\CommandInterface;

class GetDashboardItems implements CommandInterface {
    public function getVersion(): string {
        return 'v1';
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return "Seller";
    }

    public function getMethod(): string {
        return "GetDashboardItems";
    }

    public function getParams(): array {
        return [];
    }
}