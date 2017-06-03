<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 23:58
 */

namespace Marketplace\Runner;


use Marketplace\Configuration;

abstract class AbstractRunner implements RunnerInterface {
    protected $config;

    public function getConfig(): Configuration {
        return $this->config;
    }

    public function setConfig(Configuration $config): RunnerInterface {
        $this->config = $config;
        return $this;
    }
}