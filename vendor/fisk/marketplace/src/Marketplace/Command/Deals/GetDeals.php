<?php

namespace Marketplace\Command\Deals;


use Marketplace\Command\CommandInterface;

class GetDeals implements CommandInterface {
    private $num;
    private $skip;

    public function __construct(int $num = 100, int $skip = 0) {
        $this->num = $num;
        $this->skip = $skip;
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return "Deals";
    }

    public function getMethod(): string {
        return "GetDeals";
    }

    public function getParams(): array {
        $params = [];

        if ($this->num !== null)
            $params['num'] = $this->num;

        if ($this->skip !== null)
            $params['skip'] = $this->skip;

        return $params;
    }
}