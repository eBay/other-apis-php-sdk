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

namespace EBay\OtherApis\Generated\Vero\Vero_report_items;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Vero_report_itemsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Vero_report_itemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Vero_report_itemsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Vero_report_itemsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Vero_report_itemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Vero_report_itemsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Vero_report_itemsRequestBuilderGetQueryParameters.
     * @param string|null $filter This query parameter can be used to filter the result set by a date range. Only items reported within the specified time period will be returned.<br><br>This parameter will be ignored if <b>itemId</b> has been specified.<br><br><b>Format:</b> <code>YYYY-MM-DD HH:MM:SS</code><br><br><b>Example</b>: <code>reportSubmittedDate:[2024-11-14T07:47:48Z..2024-12-14T07:47:48Z]</code>.
     * @param string|null $itemId This query parameter specifies the unique identifier of an eBay listing. Only the specified reported item will be returned.
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25
     * @param string|null $offset The number of reports to skip in the result set before returning the first report in the paginated response. Combine offset with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 reports from the complete list of reports retrieved by the call. If this query parameter is not set, the default value is used and the first page of reports is returned.<br><br><b>Default:</b> 0
     * @return Vero_report_itemsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $itemId = null, ?string $limit = null, ?string $offset = null): Vero_report_itemsRequestBuilderGetQueryParameters {
        return new Vero_report_itemsRequestBuilderGetQueryParameters($filter, $itemId, $limit, $offset);
    }

}
