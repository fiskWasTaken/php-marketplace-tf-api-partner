<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 23:46
 */

namespace Marketplace\Runner;


use Marketplace\Command\CommandInterface;
use Psr\Http\Message\ResponseInterface;

class DecodeJsonStringRunner extends AbstractRunner {
    public function run(CommandInterface $command, $result) {
        if (!$result instanceof ResponseInterface)
            throw new \InvalidArgumentException("Expected a Psr\Http\Message\ResponseInterface instance.");

        /**
         * @var $result ResponseInterface
         */
        return json_decode($result->getBody()->getContents());
    }
}