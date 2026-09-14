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

namespace EBay\OtherApis\Generated\VeroApiV2\Vero_report\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithVero_report_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithVero_report_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithVero_report_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithVero_report_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithVero_report_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithVero_report_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithVero_report_ItemRequestBuilderGetQueryParameters.
     * @param bool|null $include_report_details Include this query and set it to <code>true</code> if you want to retrieve the <b>reportedDetails</b> container in the response, which contains status information. This container may be helpful if you have reported violations on more than one eBay item in the report.<br><br>By default, this boolean is set to <code>false</code>.
     * @return WithVero_report_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $include_report_details = null): WithVero_report_ItemRequestBuilderGetQueryParameters {
        return new WithVero_report_ItemRequestBuilderGetQueryParameters($include_report_details);
    }

}
