<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 02/06/17
 * Time: 22:59
 */

namespace Marketplace\Runner;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Marketplace\Command\CommandInterface;
use Marketplace\Utility\UrlBuilderInterface;

class GuzzleAsyncRunner extends AbstractRunner {
    private $client;
    private $urlBuilder;

    public function __construct(
        ClientInterface $client,
        UrlBuilderInterface $urlBuilder
    ) {
        $this->client = $client;
        $this->urlBuilder = $urlBuilder;
    }

    public function run(CommandInterface $command, $result) {
        $key = $command->getRequestMethod() === 'GET' ? 'query' : 'body';
        $options = [$key => []];

        if(!empty($params = $command->getParams())) {
            $options[$key] = array_merge($options[$key], $params);
        }

        if($config = $this->getConfig()) {
            if(!empty($config->getApiKey())) {
                $options[$key]['key'] = $config->getApiKey();
            }

            $this->urlBuilder->setBaseUrl($config->getBaseApiUrl());
        }

        $request = new Request(
            $command->getRequestMethod(),
            $this->urlBuilder->build($command)
        );

        return $this->client->sendAsync($request, $options);
    }
}