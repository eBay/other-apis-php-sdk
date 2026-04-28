<?php

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Translation\TranslationApiClient;
use EBay\OtherApis\Generated\Translation\Models\TranslateRequest;
use EBay\OtherApis\Generated\Translation\Models\TranslateResponse;

final class TranslationClient
{
    public function __construct(private readonly TranslationApiClient $kiota) {}

    /**
     * Translate listing title and description text from one language to another.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function translate(TranslateRequest $body, ?string $accessToken = null): ?TranslateResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->translate()->post($body)->wait()
        );
    }
}
