<?php

namespace Marketplace\Command\Seller;


use Marketplace\Command\CommandInterface;

class SetItemPrice implements CommandInterface {
    private $sku;
    private $price;

    public function __construct(string $sku, int $price) {
        $this->sku = $sku;
        $this->price = $price;
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getRequestMethod(): string {
        return 'POST';
    }

    public function getInterface(): string {
        return "Seller";
    }

    public function getMethod(): string {
        return "SetItemPrice";
    }

    public function getParams(): array {
        return [
            'sku' => $this->sku,
            'price' => $this->price
        ];
    }
}