<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetAttributedSalesTest extends TestCase {
    /**
     * @var GetAttributedSales
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetAttributedSales(150);
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetAttributedSales', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'num' => 150
        ], $this->instance->getParams());
    }
}