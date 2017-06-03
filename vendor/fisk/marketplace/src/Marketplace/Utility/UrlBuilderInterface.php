<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 23:01
 */

namespace Marketplace\Utility;


use GuzzleHttp\Psr7\Uri;
use Marketplace\Command\CommandInterface;

interface UrlBuilderInterface {
    public function setBaseUrl(string $url);
    public function getBaseUrl(): string;

    public function build(CommandInterface $command): Uri;
}