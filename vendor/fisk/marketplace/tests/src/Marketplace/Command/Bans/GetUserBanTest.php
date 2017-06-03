<?php

namespace Marketplace\Command\Bans;

use Marketplace\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

class GetUserBanTest extends TestCase {
    /**
     * @var GetUserBan
     */
    private $instance;

    public function setUp() {
        $this->instance = new GetUserBan("76561198012598620");
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues() {
        $this->assertEquals('Bans', $this->instance->getInterface());
        $this->assertEquals('GetUserBan', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'steamid' => '76561198012598620'
        ], $this->instance->getParams());
    }
}