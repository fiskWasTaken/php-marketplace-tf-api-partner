<?php

namespace Marketplace\Command\Bans;

use Marketplace\Command\CommandInterface;

class GetUserBan implements CommandInterface {
    private $steamid;

    public function __construct(string $steamid) {
        $this->steamid = $steamid;
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return "Bans";
    }

    public function getMethod(): string {
        return "GetUserBan";
    }

    public function getParams(): array {
        $params = [];

        if ($this->steamid !== null)
            $params['steamid'] = $this->steamid;

        return $params;
    }
}