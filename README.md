## Composer

```
composer require fisk/marketplace-partner
```

## Usage

```
<?php
$config = new Configuration([
    Configuration::API_KEY => ''
]);

$client = new Marketplace($config);
$client->addRunner(new GuzzleRunner(new Client(), new GuzzleUrlBuilder()));
$client->addRunner(new DecodeJsonStringRunner());

$result = $client->run(new GetDashboardItems());

print_r($result);
?>
```