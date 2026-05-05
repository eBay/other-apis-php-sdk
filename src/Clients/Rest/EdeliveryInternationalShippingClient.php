<?php

declare(strict_types=1);

namespace EBay\OtherApis\Clients\Rest;

use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Configuration\RequestOptions;
use EBay\OtherApis\Configuration\TokenContext;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\EdeliveryInternationalShippingApiClient;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\AddComplaintRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\AddPackageRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\AddPackageResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\BundleDetailResponse;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\BundleLabelResponse;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CancelPackagesRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CancelPackagesResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\ClonePackageResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\ConfirmPackagesRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\ConfirmPackagesResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateAddressPreferenceRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateAddressPreferenceResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateBundleRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateBundleResponse;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateConsignPreferenceRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateConsignPreferenceResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\DeletePackagesRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\DeletePackagesResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetActualCostResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetAddressPreferenceListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetAgentListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetBatteryQualListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetConsignPreferenceListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetDropoffSiteListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetHandoverSheetResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetItemPackageIdResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetLabelListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetPackageDetailResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetServiceListResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\GetTrackingDetailResponses;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Actual_costs\Actual_costsRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Address_preference\Address_preferenceRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Address_preference\Address_preferenceRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Agents\AgentsRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Battery_qualifications\Battery_qualificationsRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\BundleRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\Item\Cancel\CancelRequestBuilderPostRequestConfiguration as BundleCancelRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\Item\Label\LabelRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\Item\WithBundle_ItemRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Complaint\ComplaintRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Consign_preference\Consign_preferenceRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Consign_preference\Consign_preferenceRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Dropoff_sites\Dropoff_sitesRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Handover_sheet\Handover_sheetRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Labels\LabelsRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Bulk_cancel_packages\Bulk_cancel_packagesRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Bulk_confirm_packages\Bulk_confirm_packagesRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Bulk_delete_packages\Bulk_delete_packagesRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\Cancel\CancelRequestBuilderPostRequestConfiguration as PackageCancelRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\Confirm\ConfirmRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\EscapedClone\CloneRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\Item_Escaped\Item_EscapedRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\Order_line_item_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Item\Order_line_item_ItemRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\PackageRequestBuilderPostRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Services\ServicesRequestBuilderGetRequestConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Tracking\TrackingRequestBuilderGetRequestConfiguration;

final class EdeliveryInternationalShippingClient
{
    public function __construct(
        private readonly EdeliveryInternationalShippingApiClient $kiota,
        private readonly OtherApisConfiguration $config,
    ) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkCancelPackages(
        CancelPackagesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CancelPackagesResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_cancel_packages()->post(
                $body,
                new Bulk_cancel_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkConfirmPackages(
        ConfirmPackagesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ConfirmPackagesResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_confirm_packages()->post(
                $body,
                new Bulk_confirm_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkDeletePackages(
        DeletePackagesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?DeletePackagesResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_delete_packages()->post(
                $body,
                new Bulk_delete_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function cancelBundle(
        string $bundleId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void {
        $headers = $this->mergedHeaders($requestOptions);
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->cancel()->post(
                new BundleCancelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function cancelPackage(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void {
        $headers = $this->mergedHeaders($requestOptions);
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->cancel()->post(
                new PackageCancelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function clonePackage(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ClonePackageResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->escapedClone()->post(
                new CloneRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function confirmPackage(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void {
        $headers = $this->mergedHeaders($requestOptions);
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->confirm()->post(
                new ConfirmRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createAddressPreference(
        CreateAddressPreferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CreateAddressPreferenceResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->address_preference()->post(
                $body,
                new Address_preferenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createBundle(
        CreateBundleRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CreateBundleResponse {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->post(
                $body,
                new BundleRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createComplaint(
        AddComplaintRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void {
        $headers = $this->mergedHeaders($requestOptions);
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->complaint()->post(
                $body,
                new ComplaintRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createConsignPreference(
        CreateConsignPreferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CreateConsignPreferenceResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->consign_preference()->post(
                $body,
                new Consign_preferenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createPackage(
        AddPackageRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AddPackageResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->post(
                $body,
                new PackageRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function deletePackage(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void {
        $headers = $this->mergedHeaders($requestOptions);
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->delete(
                new Order_line_item_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getActualCosts(
        ?string $trackingNumbers = null,
        ?string $transBeginTime = null,
        ?string $transEndTime = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetActualCostResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->actual_costs()->get(
                new Actual_costsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Actual_costsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_numbers: $trackingNumbers,
                        trans_begin_time: $transBeginTime,
                        trans_end_time: $transEndTime,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getAddressPreferences(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetAddressPreferenceListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->address_preference()->get(
                new Address_preferenceRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getAgents(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetAgentListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->agents()->get(
                new AgentsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: AgentsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBatteryQualifications(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetBatteryQualListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->battery_qualifications()->get(
                new Battery_qualificationsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Battery_qualificationsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBundle(
        string $bundleId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BundleDetailResponse {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->get(
                new WithBundle_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBundleLabel(
        string $bundleId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BundleLabelResponse {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->label()->get(
                new LabelRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getConsignPreferences(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetConsignPreferenceListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->consign_preference()->get(
                new Consign_preferenceRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getDropoffSites(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetDropoffSiteListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->dropoff_sites()->get(
                new Dropoff_sitesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Dropoff_sitesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getHandoverSheet(
        ?string $trackingNumbers = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetHandoverSheetResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->handover_sheet()->get(
                new Handover_sheetRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Handover_sheetRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_numbers: $trackingNumbers,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getLabels(
        ?string $trackingNumbers = null,
        ?string $pageSize = null,
        ?string $printPreference = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetLabelListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->labels()->get(
                new LabelsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: LabelsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        page_size: $pageSize,
                        print_preference: $printPreference,
                        tracking_numbers: $trackingNumbers,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getPackage(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetPackageDetailResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->get(
                new Order_line_item_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getPackagesByLineItemID(
        string $orderLineItemId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetItemPackageIdResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->item()->get(
                new Item_EscapedRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getServices(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetServiceListResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->services()->get(
                new ServicesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: ServicesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getTracking(
        ?string $trackingNumber = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetTrackingDetailResponses {
        $headers = $this->mergedHeaders($requestOptions);
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->tracking()->get(
                new TrackingRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: TrackingRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_number: $trackingNumber,
                    ),
                )
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
