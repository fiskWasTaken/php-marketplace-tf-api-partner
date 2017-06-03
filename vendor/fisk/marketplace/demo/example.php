<?php


include_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use Marketplace\Configuration;
use Marketplace\Runner\GuzzleRunner;
use Marketplace\Runner\DecodeJsonStringRunner;
use Marketplace\Marketplace;
use Marketplace\Utility\GuzzleUrlBuilder;

$client = new Marketplace(new Configuration([
    Configuration::API_KEY => ''
]));
$client->addRunner(new GuzzleRunner(new Client(), new GuzzleUrlBuilder()));
$client->addRunner(new DecodeJsonStringRunner());

print_r($client->run(new \Marketplace\Command\Deals\GetDeals()));