<?php

declare(strict_types=1);

namespace EBay\OtherApis\Configuration;

final class OtherApisConfiguration
{
    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    public string $identityBaseUrl                        = 'https://apiz.ebay.com/commerce/identity/v1';
    public string $translationBaseUrl                     = 'https://api.ebay.com/commerce/translation/v1_beta';
    public string $veroBaseUrl                            = 'https://api.ebay.com/commerce/vero/v1';
    public string $edeliveryInternationalShippingBaseUrl  = 'https://api.ebay.com/sell/edelivery_international_shipping/v1';

    /** Static fallback; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->identityBaseUrl,
                $this->translationBaseUrl,
                $this->veroBaseUrl,
                $this->edeliveryInternationalShippingBaseUrl,
            ]
        )));
    }
}
