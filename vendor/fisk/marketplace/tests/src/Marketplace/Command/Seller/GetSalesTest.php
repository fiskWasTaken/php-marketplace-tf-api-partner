<?php

namespace Marketplace\Command\Seller;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetSalesTest extends TestCase {
    /**
     * @var GetSales
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetSales(100, 200);
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Seller', $this->instance->getInterface());
        $this->assertEquals('GetSales', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'num' => 100,
            'start_before' => 200
        ], $this->instance->getParams());
    }
}