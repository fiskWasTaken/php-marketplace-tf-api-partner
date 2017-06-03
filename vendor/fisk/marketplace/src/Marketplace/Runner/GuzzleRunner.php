<?php

namespace Marketplace\Runner;
 
use Marketplace\Command\CommandInterface;

class GuzzleRunner extends GuzzleAsyncRunner
{
    public function run(CommandInterface $command, $result = null)
    {
        return parent::run($command, $result)->wait();
    }
}
