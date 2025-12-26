# PhonePe SDK for PHP

A PHP SDK for integrating with PhonePe Payment Gateway.

## Installation

This library is used as a dependency by the Drupal Commerce PhonePe Payment module.

For standalone usage, install via Composer:

```bash
composer require rishabjasrotia/phonepe-drupal-sdk
```

## Usage

```php
use PhonePe\SDK\payments\v1\PhonePePaymentClient;
use PhonePe\SDK\Env;
use PhonePe\SDK\payments\v1\models\request\builders\PgPayRequestBuilder;
use PhonePe\SDK\payments\v1\models\request\builders\InstrumentBuilder;

$phonePeClient = new PhonePePaymentClient(
    $merchantId,
    $saltKey,
    $saltIndex,
    Env::PRODUCTION
);

$request = PgPayRequestBuilder::builder()
    ->mobileNumber($mobileNumber)
    ->callbackUrl($callbackUrl)
    ->merchantId($merchantId)
    ->merchantUserId($merchantUserId)
    ->amount($amountInPaisa)
    ->merchantTransactionId($merchantTransactionId)
    ->redirectUrl($redirectUrl)
    ->redirectMode("REDIRECT")
    ->paymentInstrument(InstrumentBuilder::buildPayPageInstrument())
    ->build();

$response = $phonePeClient->pay($request);
```

## Requirements

- PHP >= 7.4
- Guzzle HTTP Client ^6.0|^7.0

## License

MIT

