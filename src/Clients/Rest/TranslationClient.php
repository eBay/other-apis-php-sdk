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

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Configuration\RequestOptions;
use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Translation\TranslationApiClient;
use EBay\OtherApis\Generated\Translation\Models\TranslateRequest;
use EBay\OtherApis\Generated\Translation\Models\TranslateResponse;
use EBay\OtherApis\Generated\Translation\Translate\TranslateRequestBuilderPostRequestConfiguration;

final class TranslationClient
{
    public function __construct(
        private readonly TranslationApiClient $kiota,
        private readonly OtherApisConfiguration $config,
    ) {}

    /**
     * Translate listing title and description text from one language to another.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function translate(
        TranslateRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TranslateResponse {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->translate()->post(
                $body,
                new TranslateRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }
}
