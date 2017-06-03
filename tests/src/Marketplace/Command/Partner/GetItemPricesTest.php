<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetItemPricesTest extends TestCase {
    /**
     * @var GetItemPrices
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetItemPrices();
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetItemPrices', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}