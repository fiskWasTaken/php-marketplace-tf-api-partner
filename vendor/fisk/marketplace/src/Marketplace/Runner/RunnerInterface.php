<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 22:46
 */

namespace Marketplace\Runner;


use Marketplace\Command\CommandInterface;
use Marketplace\Configuration;

interface RunnerInterface {
    public function getConfig(): Configuration;
    public function setConfig(Configuration $config): RunnerInterface;
    public function run(CommandInterface $command, $result);
}