<?php

namespace Marketplace\Command\Seller;


use Marketplace\Command\CommandInterface;

class GetSales implements CommandInterface {
    private $num;
    private $start_before;

    public function __construct(int $num = null, int $start_before = null) {
        $this->num = $num;
        $this->start_before = $start_before;
    }

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
        return "GetSales";
    }

    public function getParams(): array {
        $params = [];

        if ($this->num !== null)
            $params['num'] = $this->num;

        if ($this->start_before !== null)
            $params['start_before'] = $this->start_before;

        return $params;
    }
}