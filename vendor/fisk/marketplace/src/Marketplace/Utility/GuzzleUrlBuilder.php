<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 22:51
 */

namespace Marketplace\Utility;


use GuzzleHttp\Psr7\Uri;
use Marketplace\Command\CommandInterface;

class GuzzleUrlBuilder implements UrlBuilderInterface {
    const FORMAT = '%s/%s/%s/%s';
    private $baseUrl;

    public function build(CommandInterface $command): Uri {
        $uri = sprintf(self::FORMAT,
            $this->baseUrl,
            $command->getInterface(),
            $command->getMethod(),
            $command->getVersion()
        );

        return new Uri($uri);
    }

    public function getBaseUrl(): string {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $url) {
        $this->baseUrl = $url;
    }
}