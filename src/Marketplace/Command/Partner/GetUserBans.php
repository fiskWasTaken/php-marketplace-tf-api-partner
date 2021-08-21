<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 03/06/17
 * Time: 00:37
 */

namespace Marketplace\Command\Partner;


use Marketplace\Command\CommandInterface;

class GetUserBans implements CommandInterface {
    private $steamid;

    public function __construct(string $steamid) {
        $this->steamid = $steamid;
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return 'Partner';
    }

    public function getMethod(): string {
        return 'GetUserBans';
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getParams(): array {
        return [
            'steamids' => $this->steamid
        ];
    }
}