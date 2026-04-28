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

    public string $identityBaseUrl                     = 'https://apiz.ebay.com';
    public string $translationBaseUrl                  = 'https://api.ebay.com';
    public string $veroBaseUrl                         = 'https://api.ebay.com';
    public string $edeliveryInternationalShippingBaseUrl = 'https://api.ebay.com';

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
