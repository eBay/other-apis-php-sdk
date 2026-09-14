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
use EBay\OtherApis\Generated\InternationalShipping\InternationalShippingApiClient;
use EBay\OtherApis\Generated\InternationalShipping\Models\AddComplaintRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\AddPackageRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\AddPackageResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\BundleDetailResponse;
use EBay\OtherApis\Generated\InternationalShipping\Models\BundleLabelResponse;
use EBay\OtherApis\Generated\InternationalShipping\Models\CancelPackagesRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\CancelPackagesResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\ClonePackageResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\ConfirmPackagesRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\ConfirmPackagesResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateAddressPreferenceRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateAddressPreferenceResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateBundleRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateBundleResponse;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateConsignPreferenceRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateConsignPreferenceResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\DeletePackagesRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\DeletePackagesResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetActualCostResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetAddressPreferenceListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetAgentListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetBatteryQualListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetConsignPreferenceListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetCpscProfilesResponse;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetDropoffSiteListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetHandoverSheetResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetItemPackageIdResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetLabelListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetPackageDetailResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetServiceListResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetTrackingDetailResponses;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class InternationalShippingClient
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

    public function getActualCosts(
        ?string $trackingNumbers = null,
        ?string $transBeginTime = null,
        ?string $transEndTime = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetActualCostResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->actual_costs()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Actual_costs\Actual_costsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Actual_costs\Actual_costsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_numbers: $trackingNumbers,
                        trans_begin_time: $transBeginTime,
                        trans_end_time: $transEndTime,
                    ),
                )
            )->wait()
        );
    }

    public function getAddressPreferences(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetAddressPreferenceListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->address_preference()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Address_preference\Address_preferenceRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createAddressPreference(CreateAddressPreferenceRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CreateAddressPreferenceResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->address_preference()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Address_preference\Address_preferenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAgents(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetAgentListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->agents()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Agents\AgentsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Agents\AgentsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getBatteryQualifications(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetBatteryQualListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->battery_qualifications()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Battery_qualifications\Battery_qualificationsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Battery_qualifications\Battery_qualificationsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function cancelBundle(string $bundleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->bundle()->byBundle_id($bundleId)->cancel()->post(
                new \EBay\OtherApis\Generated\InternationalShipping\Bundle\Item\Cancel\CancelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createBundle(CreateBundleRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CreateBundleResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bundle()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Bundle\BundleRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getBundle(string $bundleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BundleDetailResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bundle()->byBundle_id($bundleId)->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Bundle\Item\WithBundle_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getBundleLabel(string $bundleId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BundleLabelResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bundle()->byBundle_id($bundleId)->label()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Bundle\Item\Label\LabelRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createComplaint(AddComplaintRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->complaint()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Complaint\ComplaintRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getConsignPreferences(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetConsignPreferenceListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->consign_preference()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Consign_preference\Consign_preferenceRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createConsignPreference(CreateConsignPreferenceRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CreateConsignPreferenceResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->consign_preference()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Consign_preference\Consign_preferenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCpscProfiles(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetCpscProfilesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->cpsc_profiles()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Cpsc_profiles\Cpsc_profilesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Cpsc_profiles\Cpsc_profilesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getDropoffSites(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetDropoffSiteListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->dropoff_sites()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Dropoff_sites\Dropoff_sitesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Dropoff_sites\Dropoff_sitesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getHandoverSheet(?string $trackingNumbers = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetHandoverSheetResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->handover_sheet()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Handover_sheet\Handover_sheetRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Handover_sheet\Handover_sheetRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_numbers: $trackingNumbers,
                    ),
                )
            )->wait()
        );
    }

    public function getLabels(
        ?string $pageSize = null,
        ?string $printPreference = null,
        ?string $trackingNumbers = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetLabelListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->labels()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Labels\LabelsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Labels\LabelsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        page_size: $pageSize,
                        print_preference: $printPreference,
                        tracking_numbers: $trackingNumbers,
                    ),
                )
            )->wait()
        );
    }

    public function bulkCancelPackages(CancelPackagesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CancelPackagesResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->bulk_cancel_packages()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_cancel_packages\Bulk_cancel_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkConfirmPackages(ConfirmPackagesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ConfirmPackagesResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->bulk_confirm_packages()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_confirm_packages\Bulk_confirm_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkDeletePackages(DeletePackagesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?DeletePackagesResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->bulk_delete_packages()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_delete_packages\Bulk_delete_packagesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function cancelPackage(string $packageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($packageId)->cancel()->post(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\Cancel\CancelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function clonePackage(string $packageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ClonePackageResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($packageId)->escapedClone()->post(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\EscapedClone\CloneRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function confirmPackage(string $packageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($packageId)->confirm()->post(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\Confirm\ConfirmRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createPackage(AddPackageRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?AddPackageResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->post(
                $body,
                new \EBay\OtherApis\Generated\InternationalShipping\Package\PackageRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPackage(string $packageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetPackageDetailResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($packageId)->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\Order_line_item_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deletePackage(string $packageId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($packageId)->delete(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\Order_line_item_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPackagesByLineItemID(string $orderLineItemId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetItemPackageIdResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->package()->byOrder_line_item_Id($orderLineItemId)->item()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Package\Item\Item_Escaped\Item_EscapedRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getServices(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetServiceListResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->services()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Services\ServicesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Services\ServicesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getTracking(?string $trackingNumber = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetTrackingDetailResponses
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->tracking()->get(
                new \EBay\OtherApis\Generated\InternationalShipping\Tracking\TrackingRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OtherApis\Generated\InternationalShipping\Tracking\TrackingRequestBuilderGetRequestConfiguration::createQueryParameters(
                        tracking_number: $trackingNumber,
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

    private function buildApiClient(string $token): InternationalShippingApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->internationalShippingBaseUrl);
        return new InternationalShippingApiClient($adapter);
    }
}
