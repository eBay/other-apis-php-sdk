<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

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

    /** Redact accessToken from var_dump / print_r output. */
    public function __debugInfo(): array
    {
        return array_merge(get_object_vars($this), [
            'accessToken' => $this->accessToken !== null ? '***' : null,
        ]);
    }

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
