<?php

declare(strict_types=1);

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Configuration\RequestOptions;
use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Vero\VeroApiClient;
use EBay\OtherApis\Generated\Vero\Models\VeroReasonCodeDetailResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReasonCodeResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsRequest;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsResponse;
use EBay\OtherApis\Generated\Vero\Models\ReportStatusResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReportStatusResponse;
use EBay\OtherApis\Generated\Vero\Vero_reason_code\Item\WithVero_reason_code_ItemRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\Vero\Vero_reason_code\Vero_reason_codeRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\Vero\Vero_report\Item\WithVero_report_ItemRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\Vero\Vero_report\Vero_reportRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\Vero\Vero_report_items\Vero_report_itemsRequestBuilderGetRequestConfiguration;

final class VeroClient
{
    public function __construct(
        private readonly VeroApiClient $kiota,
        private readonly OtherApisConfiguration $config,
    ) {}

    /**
     * Create a VeRO report for one or more listings (max 150 items).
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function createVeroReport(
        VeroReportItemsRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReportItemsResponse {
        $headers = $this->applyHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report()->post(
                $body,
                new Vero_reportRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * Retrieve details of a specific VeRO reason code.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function getVeroReasonCode(
        string $veroReasonCodeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReasonCodeResponse {
        $headers = $this->applyHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_reason_code()->byVero_reason_code_id($veroReasonCodeId)->get(
                new WithVero_reason_code_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * Retrieve details of all VeRO reason codes.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function getVeroReasonCodes(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReasonCodeDetailResponse {
        $headers = $this->applyHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_reason_code()->get(
                new Vero_reason_codeRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * Retrieve status information about a submitted VeRO report.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function getVeroReport(
        string $veroReportId,
        ?string $includeItemDetails = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReportStatusResponse {
        $headers = $this->applyHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report()->byVero_report_id($veroReportId)->get(
                new WithVero_report_ItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: WithVero_report_ItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        includeItemDetails: $includeItemDetails,
                    ),
                )
            )->wait()
        );
    }

    /**
     * Retrieve status information about VeRO reported items.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over config defaults.
     */
    public function getVeroReportItems(
        ?string $filter = null,
        ?string $itemId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VeroReportStatusResponse {
        $headers = $this->applyHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report_items()->get(
                new Vero_report_itemsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Vero_report_itemsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        itemId: $itemId,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    /** @return array<string,string> */
    private function applyHeaders(?RequestOptions $requestOptions): array
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
