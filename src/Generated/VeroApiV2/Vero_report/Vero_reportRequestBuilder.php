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

namespace EBay\OtherApis\Generated\VeroApiV2\Vero_report;

use EBay\OtherApis\Generated\VeroApiV2\Vero_report\Item\WithVero_report_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /vero_report
*/
class Vero_reportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OtherApis/Generated/VeroApiV2.vero_report.item collection
     * @param string $vero_report_id This path parameter specifies the unique identifier of the VeRO report being retrieved.<br><br>This value is returned when creating a VeRO report through the <a href="/develop/api/sell/vero_api_v2#sell-vero_api_v2-report_vero_violations-reportveroviolations">reportVeroViolations</a> method.
     * @return WithVero_report_ItemRequestBuilder
    */
    public function byVero_report_id(string $vero_report_id): WithVero_report_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vero_report_id'] = $vero_report_id;
        return new WithVero_report_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Vero_reportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/vero_report');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
