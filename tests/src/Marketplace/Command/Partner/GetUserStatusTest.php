<?php

namespace Marketplace\Command\Partner;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetUserStatusTest extends TestCase {
    /**
     * @var GetUserStatus
     */
    private $instance;

    public function setUp(): void {
        $this->instance = new GetUserStatus("76561198012598620");
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Partner', $this->instance->getInterface());
        $this->assertEquals('GetUserStatus', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'steamid' => "76561198012598620"
        ], $this->instance->getParams());
    }
}