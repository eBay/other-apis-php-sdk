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

namespace EBay\OtherApis\Generated\InternationalShipping\Handover_sheet;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Handover_sheetRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Handover_sheetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Handover_sheetRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Handover_sheetRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Handover_sheetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Handover_sheetRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Handover_sheetRequestBuilderGetQueryParameters.
     * @param string|null $tracking_numbers This query parameter specifies an array of tracking numbers for the packages for which to retrieve a handover sheet.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters. For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
     * @return Handover_sheetRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $tracking_numbers = null): Handover_sheetRequestBuilderGetQueryParameters {
        return new Handover_sheetRequestBuilderGetQueryParameters($tracking_numbers);
    }

}
