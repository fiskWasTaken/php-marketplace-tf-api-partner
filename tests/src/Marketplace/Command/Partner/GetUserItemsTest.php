<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetUserItemsTest extends TestCase {
    /**
     * @var GetUserItems
     */
    private $instance;

    public function setUp(): void {
        $this->instance = new GetUserItems("76561198012598620", 2000, true,
            false);
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetUserItems', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'steamid' => "76561198012598620",
            'limit' => 2000,
            'images' => true,
            'unpriced' => false
        ], $this->instance->getParams());
    }
}