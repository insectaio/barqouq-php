# insectaio/barqouq

[![Latest Version](https://img.shields.io/packagist/v/insectaio/barqouq.svg)](https://packagist.org/packages/insectaio/barqouq)
[![Total Downloads](https://img.shields.io/packagist/dt/insectaio/barqouq.svg)](https://packagist.org/packages/insectaio/barqouq)

PHP SDK for interacting with the Barqouq storefront via gRPC. Built using protobuf definitions from [buf.build/insecta/barqouq](https://buf.build/insecta/barqouq).

**Latest version: v1.0.2**

## Installation

```bash
composer require insectaio/barqouq:^1.0
```

> Requires [`insectaio/common`](https://packagist.org/packages/insectaio/common) v1.0.1+ as a dependency.

## Usage

```php
use Barqouq\Shopfront\Product\ProductServiceClient;
use Barqouq\Shopfront\Product\SearchRequest;
use Grpc\ChannelCredentials;

$client = new ProductServiceClient(
    'api.barqouq.shop:443',
    ['credentials' => ChannelCredentials::createSsl()]
);

$request = new SearchRequest();
$request->setClientKey('your-client-key');
$request->setSubdomain('demo');

[$response, $status] = $client->Search($request)->wait();
```

## Protobuf Autoload

```json
{
  "autoload": {
    "psr-4": {
      "Barqouq\\Shopfront\\Product\\": "generated/barqouq_php/Barqouq/Shopfront/Product/",
      "Barqouq\\Shared\\": "generated/barqouq_php/Barqouq/Shared/",
      "GPBMetadata\\": [
        "generated/barqouq_php/GPBMetadata/",
        "generated/common_php/GPBMetadata/"
      ]
    }
  }
}
```

## Requirements

- PHP 8.0+
- [google/protobuf](https://github.com/protocolbuffers/protobuf) `^4.31`
- [grpc/grpc](https://github.com/grpc/grpc) `^1.57`

---

### License

MIT
