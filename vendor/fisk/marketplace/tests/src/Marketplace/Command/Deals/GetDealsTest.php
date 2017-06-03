<?php

namespace Marketplace\Command\Deals;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetDealsTest extends TestCase {
    /**
     * @var GetDeals
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetDeals(100, 200);
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Deals', $this->instance->getInterface());
        $this->assertEquals('GetDeals', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'num' => 100,
            'skip' => 200
        ], $this->instance->getParams());
    }
}