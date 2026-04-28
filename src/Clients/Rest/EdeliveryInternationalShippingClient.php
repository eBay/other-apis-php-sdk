<?php

namespace EBay\OtherApis\Clients\Rest;

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

final class EdeliveryInternationalShippingClient
{
    public function __construct(private readonly EdeliveryInternationalShippingApiClient $kiota) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkCancelPackages(CancelPackagesRequest $body, ?string $accessToken = null): ?CancelPackagesResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_cancel_packages()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkConfirmPackages(ConfirmPackagesRequest $body, ?string $accessToken = null): ?ConfirmPackagesResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_confirm_packages()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkDeletePackages(DeletePackagesRequest $body, ?string $accessToken = null): ?DeletePackagesResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->bulk_delete_packages()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function cancelBundle(string $bundleId, ?string $accessToken = null): void
    {
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->cancel()->post()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function cancelPackage(string $orderLineItemId, ?string $accessToken = null): void
    {
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->cancel()->post()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function clonePackage(string $orderLineItemId, ?string $accessToken = null): ?ClonePackageResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->escapedClone()->post()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function confirmPackage(string $orderLineItemId, ?string $accessToken = null): void
    {
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->confirm()->post()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createAddressPreference(CreateAddressPreferenceRequest $body, ?string $accessToken = null): ?CreateAddressPreferenceResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->address_preference()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createBundle(CreateBundleRequest $body, ?string $accessToken = null): ?CreateBundleResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createComplaint(AddComplaintRequest $body, ?string $accessToken = null): void
    {
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->complaint()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createConsignPreference(CreateConsignPreferenceRequest $body, ?string $accessToken = null): ?CreateConsignPreferenceResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->consign_preference()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function createPackage(AddPackageRequest $body, ?string $accessToken = null): ?AddPackageResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->post($body)->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function deletePackage(string $orderLineItemId, ?string $accessToken = null): void
    {
        TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->delete()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getActualCosts(?string $accessToken = null): ?GetActualCostResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->actual_costs()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getAddressPreferences(?string $accessToken = null): ?GetAddressPreferenceListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->address_preference()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getAgents(?string $accessToken = null): ?GetAgentListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->agents()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBatteryQualifications(?string $accessToken = null): ?GetBatteryQualListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->battery_qualifications()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBundle(string $bundleId, ?string $accessToken = null): ?BundleDetailResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getBundleLabel(string $bundleId, ?string $accessToken = null): ?BundleLabelResponse
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->bundle()->byBundle_id($bundleId)->label()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getConsignPreferences(?string $accessToken = null): ?GetConsignPreferenceListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->consign_preference()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getDropoffSites(?string $accessToken = null): ?GetDropoffSiteListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->dropoff_sites()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getHandoverSheet(?string $accessToken = null): ?GetHandoverSheetResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->handover_sheet()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getLabels(?string $accessToken = null): ?GetLabelListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->labels()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getPackage(string $orderLineItemId, ?string $accessToken = null): ?GetPackageDetailResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getPackagesByLineItemID(string $orderLineItemId, ?string $accessToken = null): ?GetItemPackageIdResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->package()->byOrder_line_item_Id($orderLineItemId)->item()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getServices(?string $accessToken = null): ?GetServiceListResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->services()->get()->wait()
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getTracking(?string $accessToken = null): ?GetTrackingDetailResponses
    {
        return TokenContext::runWith($accessToken, fn() =>
            $this->kiota->tracking()->get()->wait()
        );
    }
}
