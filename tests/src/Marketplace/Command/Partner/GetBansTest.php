<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetBansTest extends TestCase {
    /**
     * @var GetBans
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetBans();
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetBans', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}