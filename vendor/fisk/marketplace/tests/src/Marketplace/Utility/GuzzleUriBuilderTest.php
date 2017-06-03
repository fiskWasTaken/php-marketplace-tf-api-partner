<?php

namespace Marketplace\Runner;

use Marketplace\Utility\GuzzleUrlBuilder;
use Marketplace\Utility\UrlBuilderInterface;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 23:08
 */
class GuzzleUriBuilderTest extends TestCase {
    /**
     * @var GuzzleUrlBuilder
     */
    private $instance;

    public function setUp() {
        $this->instance = new GuzzleUrlBuilder();
        $this->instance->setBaseUrl("https://marketplace.tf/api");
    }

    public function testImplementsInterface() {
        $this->assertTrue($this->instance instanceof UrlBuilderInterface);
    }

    public function testValues() {
        $this->assertEquals("https://marketplace.tf/api",
            $this->instance->getBaseUrl());
    }
}