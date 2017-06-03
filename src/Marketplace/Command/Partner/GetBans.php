<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 03/06/17
 * Time: 00:38
 */

namespace Marketplace\Command\Partner;


use Marketplace\Command\CommandInterface;

class GetBans implements CommandInterface {
    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return 'Partner';
    }

    public function getMethod(): string {
        return 'GetBans';
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getParams(): array {
        return [];
    }
}