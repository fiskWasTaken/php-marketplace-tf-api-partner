<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 03/06/17
 * Time: 00:52
 */

namespace Marketplace\Command\Partner;


use Marketplace\Command\CommandInterface;

class GetItemStatus implements CommandInterface {
    private $itemid;

    public function __construct(string $itemid) {
        $this->itemid = $itemid;
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return 'Partner';
    }

    public function getMethod(): string {
        return 'GetItemStatus';
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getParams(): array {
        return [
            'itemid' => $this->itemid
        ];
    }
}