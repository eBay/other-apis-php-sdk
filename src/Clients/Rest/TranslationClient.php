<?php

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
        $headers = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                if (!array_key_exists($key, $headers)) {
                    $headers[$key] = $value;
                }
            }
        }
        return $headers;
    }
}
