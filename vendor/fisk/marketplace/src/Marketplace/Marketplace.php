<?php

namespace Marketplace;

use Marketplace\Command\CommandInterface;
use Marketplace\Runner\RunnerInterface;

class Marketplace {
    private $config;
    /**
     * @var RunnerInterface[]
     */
    private $runners;

    public function __construct(Configuration $config) {
        $this->config = $config;
        $this->runners = [];
    }

    public function getConfig(): Configuration {
        return $this->config;
    }

    public function addRunner(RunnerInterface $runner) {
        $this->runners[] = $runner->setConfig($this->config);
    }

    public function run(CommandInterface $command) {
        $result = null;

        foreach ($this->runners as $runner) {
            $result = $runner->run($command, $result);
        }

        return $result;
    }
}