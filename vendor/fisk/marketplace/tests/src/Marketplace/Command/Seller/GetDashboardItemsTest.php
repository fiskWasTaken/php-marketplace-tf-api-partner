<?php

namespace Marketplace\Command\Seller;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetDashboardItemsTest extends TestCase {
    /**
     * @var GetDashboardItems
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetDashboardItems();
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Seller', $this->instance->getInterface());
        $this->assertEquals('GetDashboardItems', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}