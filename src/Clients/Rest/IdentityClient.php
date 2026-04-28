<?php

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Identity\IdentityApiClient;
use EBay\OtherApis\Generated\Identity\Models\UserResponse;

final class IdentityClient
{
    public function __construct(private readonly IdentityApiClient $kiota) {}

    /**
     * Retrieve the authenticated user's account profile information.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getUser(?string $accessToken = null): ?UserResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->user()->emptyPathSegment()->get()->wait()
        );
    }
}
