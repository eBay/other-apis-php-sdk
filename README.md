# eBay Other APIs PHP SDK

PHP SDK for miscellaneous eBay REST APIs, built on [Microsoft Kiota](https://github.com/microsoft/kiota) + Guzzle.

## Covered APIs

| API | Client Property | Description |
|-----|----------------|-------------|
| **Identity API** | `$sdk->identity` | Retrieve account profile information for an authenticated user |
| **Translation API** (beta) | `$sdk->translation` | Translate listing titles, descriptions, and search queries between languages |
| **VeRO API** | `$sdk->vero` | Report listings that infringe intellectual property rights (Verified Rights Owner Program) |
| **eDelivery International Shipping API** | `$sdk->edeliveryInternationalShipping` | Create, manage, and track international shipping orders for Greater-China sellers |

## Requirements

- PHP 8.2+
- Composer
- An eBay developer account with valid OAuth credentials

## Installation

```bash
composer require ebay/other-apis
```

Or add as a path repository for local development:

```json
{
  "repositories": [
    { "type": "path", "url": "../other-apis-php-sdk" }
  ],
  "require": {
    "ebay/other-apis": "*"
  }
}
```

## Quick Start

```php
use EBay\OtherApis\OtherApisClient;
use EBay\OtherApis\Configuration\OtherApisConfiguration;

$config = new OtherApisConfiguration();
$config->accessToken = 'your-ebay-access-token';

$sdk = new OtherApisClient($config);
```

## Usage Examples

### Identity API

```php
$user = $sdk->identity->getUser();
echo $user->getUsername();
echo $user->getAccountType();
echo $user->getUserId();
```

### Translation API

```php
use EBay\OtherApis\Generated\Translation\Models\TranslateRequest;

$request = new TranslateRequest();
$request->setFrom('zh');
$request->setTo('en');
$request->setText(['精品手表']);
$request->setTranslationContext('ITEM_TITLE');

$response = $sdk->translation->translate($request);

foreach ($response->getTranslations() as $translation) {
    echo $translation->getOriginalText() . ' → ' . $translation->getTranslatedText();
}
```

### VeRO API

```php
// Get all VeRO reason codes
$codes = $sdk->vero->getVeroReasonCodes();
foreach ($codes->getVeroReasonCodes() as $code) {
    echo $code->getVeroReasonCodeId();
}

// Get a specific reason code
$code = $sdk->vero->getVeroReasonCode('9037');

// Submit a VeRO report
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsRequest;
use EBay\OtherApis\Generated\Vero\Models\ReportItemDetails;

$item = new ReportItemDetails();
$item->setItemId('123456789012');
$item->setVeroReasonCodeId('9037');
$item->setBrand('ExampleBrand');

$request = new VeroReportItemsRequest();
$request->setReportItems([$item]);

$report = $sdk->vero->createVeroReport($request);
echo $report->getVeroReportId();

// Check report status
$status = $sdk->vero->getVeroReport($report->getVeroReportId());
echo $status->getVeroReportStatus();

// Browse reported items
$items = $sdk->vero->getVeroReportItems(limit: '10', offset: '0');
```

### eDelivery International Shipping API

```php
// List available shipping services
$services = $sdk->edeliveryInternationalShipping->getServices(limit: '10');

// Get shipping agents
$agents = $sdk->edeliveryInternationalShipping->getAgents(limit: '10');

// Get battery qualifications
$batteries = $sdk->edeliveryInternationalShipping->getBatteryQualifications();

// Get address preferences
$addresses = $sdk->edeliveryInternationalShipping->getAddressPreferences();

// Get consign preferences
$consign = $sdk->edeliveryInternationalShipping->getConsignPreferences();

// Get drop-off sites
$sites = $sdk->edeliveryInternationalShipping->getDropoffSites(limit: '10');
```

## Per-Call Token Override

Every method accepts an optional `$accessToken` parameter for per-call token overrides:

```php
$user = $sdk->identity->getUser(accessToken: 'different-token');
```

## Custom Headers

```php
use EBay\OtherApis\Configuration\RequestOptions;

$opts = new RequestOptions(headers: ['X-EBAY-C-MARKETPLACE-ID' => 'EBAY_US']);
$user = $sdk->identity->getUser(requestOptions: $opts);
```

## Diagnostic Logging

Enable logging of non-2xx responses to STDERR:

```php
$config->diagnosticLogging = true;
```

## OAuth Scopes

| API | Required Scopes |
|-----|----------------|
| Identity | `https://api.ebay.com/oauth/api_scope/commerce.identity.readonly` |
| Translation | `https://api.ebay.com/oauth/api_scope` |
| VeRO | `https://api.ebay.com/oauth/api_scope/sell.vero` |
| eDelivery Intl Shipping | `https://api.ebay.com/oauth/api_scope/sell.edelivery` |

## Specs

OpenAPI specs are in `specs/`. To regenerate Kiota clients:

```bash
./generate.sh
composer dump-autoload
```

## Architecture

```
src/
  OtherApisClient.php                     ← Facade: ->identity, ->translation, ->vero, ->edeliveryInternationalShipping
  Configuration/
    OtherApisConfiguration.php            ← Base URLs, fallback accessToken, options
    KiotaAuthProvider.php                 ← AccessTokenProvider bridge for Kiota
    TokenContext.php                      ← Static per-call token carrier
    RequestOptions.php                    ← Per-call custom headers
  Clients/Rest/
    IdentityClient.php                    ← Hand-crafted wrapper over Kiota Identity client
    TranslationClient.php                 ← Hand-crafted wrapper over Kiota Translation client
    VeroClient.php                        ← Hand-crafted wrapper over Kiota VeRO client
    EdeliveryInternationalShippingClient.php ← Hand-crafted wrapper over Kiota EDIS client
  Generated/                              ← Kiota output (committed to source control)
    Identity/
    Translation/
    Vero/
    EdeliveryInternationalShipping/
specs/                                    ← OpenAPI specs (source of truth)
```

## License

This project is licensed under the Apache License 2.0. See [LICENSE](LICENSE) for details.
