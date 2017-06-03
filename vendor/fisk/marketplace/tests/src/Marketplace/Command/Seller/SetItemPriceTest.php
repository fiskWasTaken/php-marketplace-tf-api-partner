<?php

namespace Marketplace\Command\Seller;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class SetItemPriceTest extends TestCase {
    /**
     * @var SetItemPrice
     */
    private $instance;

    public function setUp() {
        $this->instance = new SetItemPrice("a", 100);
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Seller', $this->instance->getInterface());
        $this->assertEquals('SetItemPrice', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('POST', $this->instance->getRequestMethod());
        $this->assertEquals([
            'sku' => 'a',
            'price' => 100
        ], $this->instance->getParams());
    }
}