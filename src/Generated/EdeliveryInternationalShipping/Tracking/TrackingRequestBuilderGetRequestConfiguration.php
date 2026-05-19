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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Tracking;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrackingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TrackingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrackingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TrackingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TrackingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TrackingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TrackingRequestBuilderGetQueryParameters.
     * @param string|null $tracking_number This query parameter specifies the tracking number for which to retrieve current tracking event details.<br><br>This value is returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.
     * @return TrackingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $tracking_number = null): TrackingRequestBuilderGetQueryParameters {
        return new TrackingRequestBuilderGetQueryParameters($tracking_number);
    }

}
