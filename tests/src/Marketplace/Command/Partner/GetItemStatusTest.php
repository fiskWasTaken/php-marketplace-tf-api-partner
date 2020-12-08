<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetItemStatusTest extends TestCase {
    /**
     * @var GetItemPrices
     */
    private $instance;

    public function setUp(): void {
        $this->instance = new GetItemStatus("1000");
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetItemStatus', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'itemid' => "1000"
        ], $this->instance->getParams());
    }
}