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
    private $count;
    private $offset;
    private $images = false;
    private $unpriced = false;

    public function __construct(string $steamid, int $count = 20000, int $offset = 0) {
        $this->steamid = $steamid;
        $this->count = $count;
        $this->offset = $offset;
    }

    public function withUnpriced(bool $unpriced = true)
    {
        $this->unpriced = $unpriced;
        return $this;
    }

    public function withImages(bool $images = true)
    {
        $this->images = $images;
        return $this;
    }

    public function withCount(int $count)
    {
        $this->count = $count;
        return $this;
    }

    public function withOffset(int $offset)
    {
        $this->offset = $offset;
        return $this;
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
        return 'v3';
    }

    public function getParams(): array {
        return [
            'steamid' => $this->steamid,
            'count' => $this->count,
            'offset' => $this->offset,
            'images' => $this->images,
            'unpriced' => $this->unpriced
        ];
    }
}