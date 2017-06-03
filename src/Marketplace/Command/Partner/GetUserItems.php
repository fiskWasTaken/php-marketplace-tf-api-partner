<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 03/06/17
 * Time: 00:38
 */

namespace Marketplace\Command\Partner;


use Marketplace\Command\CommandInterface;

class GetUserItems implements CommandInterface {
    private $steamid;
    private $limit;
    private $images;
    private $unpriced;

    public function __construct(string $steamid, int $limit, bool $images,
                                bool $unpriced) {
        $this->steamid = $steamid;
        $this->limit = $limit;
        $this->images = $images;
        $this->unpriced = $unpriced;
    }

    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return 'Partner';
    }

    public function getMethod(): string {
        return 'GetUserItems';
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getParams(): array {
        return [
            'steamid' => $this->steamid,
            'limit' => $this->limit,
            'images' => $this->images,
            'unpriced' => $this->unpriced
        ];
    }
}