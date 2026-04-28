<?php

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\Vero\VeroApiClient;
use EBay\OtherApis\Generated\Vero\Models\VeroReasonCodeDetailResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReasonCodeResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsRequest;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsResponse;
use EBay\OtherApis\Generated\Vero\Models\ReportStatusResponse;
use EBay\OtherApis\Generated\Vero\Models\VeroReportStatusResponse;

final class VeroClient
{
    public function __construct(private readonly VeroApiClient $kiota) {}

    /**
     * Create a VeRO report for one or more listings (max 150 items).
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function createVeroReport(VeroReportItemsRequest $body, ?string $accessToken = null): ?VeroReportItemsResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report()->post($body)->wait()
        );
    }

    /**
     * Retrieve details of a specific VeRO reason code.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getVeroReasonCode(string $veroReasonCodeId, ?string $accessToken = null): ?VeroReasonCodeResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_reason_code()->byVero_reason_code_id($veroReasonCodeId)->get()->wait()
        );
    }

    /**
     * Retrieve details of all VeRO reason codes.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getVeroReasonCodes(?string $accessToken = null): ?VeroReasonCodeDetailResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_reason_code()->get()->wait()
        );
    }

    /**
     * Retrieve status information about a submitted VeRO report.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getVeroReport(string $veroReportId, ?string $accessToken = null): ?ReportStatusResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report()->byVero_report_id($veroReportId)->get()->wait()
        );
    }

    /**
     * Retrieve status information about VeRO reported items.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getVeroReportItems(?string $accessToken = null): ?VeroReportStatusResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->vero_report_items()->get()->wait()
        );
    }
}
