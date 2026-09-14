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

use EBay\OtherApis\Configuration\KiotaAuthProvider;
use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Configuration\RequestOptions;
use EBay\OtherApis\Generated\VeroApiV2\VeroApiV2ApiClient;
use EBay\OtherApis\Generated\VeroApiV2\Models\ReportVeroViolationRequest;
use EBay\OtherApis\Generated\VeroApiV2\Models\ReportVeroViolationResponse;
use EBay\OtherApis\Generated\VeroApiV2\Models\VeroReasonCode;
use EBay\OtherApis\Generated\VeroApiV2\Models\VeroReasonCodeDetailResponse;
use EBay\OtherApis\Generated\VeroApiV2\Models\VeroReport;
use EBay\OtherApis\Generated\VeroApiV2\Models\VeroReportStatusResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class VeroApiV2Client
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly OtherApisConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getVeroReasonCode(string $veroReasonCodeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?VeroReasonCode
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->vero_reason_code()->byVero_reason_code_id($veroReasonCodeId)->get(
                new \EBay\OtherApis\Generated\VeroApiV2\Vero_reason_code\Item\WithVero_reason_code_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getVeroReasonCodes(?string $xEBAYCMARKETPLACEID = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?VeroReasonCodeDetailResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->vero_reason_code()->get(
                new \EBay\OtherApis\Generated\VeroApiV2\Vero_reason_code\Vero_reason_codeRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function reportVeroViolations(ReportVeroViolationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ReportVeroViolationResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->report_vero_violations()->post(
                $body,
                new \EBay\OtherApis\Generated\VeroApiV2\Report_vero_violations\Report_vero_violationsRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getVeroReport(
        string $veroReportId,
        ?bool $includeReportDetails = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReport
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->vero_report()->byVero_report_id($veroReportId)->get(
                new \EBay\OtherApis\Generated\VeroApiV2\Vero_report\Item\WithVero_report_ItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\VeroApiV2\Vero_report\Item\WithVero_report_ItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        include_report_details: $includeReportDetails,
                    ),
                )
            )->wait()
        );
    }

    public function getVeroReportItems(
        ?string $filter = null,
        ?string $itemId = null,
        ?int $limit = null,
        ?int $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReportStatusResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->vero_report_items()->get(
                new \EBay\OtherApis\Generated\VeroApiV2\Vero_report_items\Vero_report_itemsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\VeroApiV2\Vero_report_items\Vero_report_itemsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        item_id: $itemId,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set OtherApisConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): VeroApiV2ApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->veroApiV2BaseUrl);
        return new VeroApiV2ApiClient($adapter);
    }
}
