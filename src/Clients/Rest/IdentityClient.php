<?php

declare(strict_types=1);

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Configuration\RequestOptions;
use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Identity\IdentityApiClient;
use EBay\OtherApis\Generated\Identity\Models\UserResponse;
use EBay\OtherApis\Generated\Identity\User\EmptyPathSegmentRequestBuilderGetRequestConfiguration;

final class IdentityClient
{
    public function __construct(
        private readonly IdentityApiClient $kiota,
        private readonly OtherApisConfiguration $config,
    ) {}

    /**
     * Retrieve the authenticated user's account profile information.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function getUser(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?UserResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->user()->emptyPathSegment()->get(
                new EmptyPathSegmentRequestBuilderGetRequestConfiguration(headers: $headers)
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
