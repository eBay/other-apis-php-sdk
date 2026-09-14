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

namespace EBay\OtherApis\Generated\Vero\Vero_report;

use EBay\OtherApis\Generated\Vero\Models\Error;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsRequest;
use EBay\OtherApis\Generated\Vero\Models\VeroReportItemsResponse;
use EBay\OtherApis\Generated\Vero\Vero_report\Item\WithVero_report_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /vero_report
*/
class Vero_reportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OtherApis/Generated/Vero.vero_report.item collection
     * @param string $vero_report_id This path parameter specifies the unique identifier of the VeRO report being retrieved.<br><br>This value is returned when creating a VeRO report through the <a href="/develop/api/sell/vero_public_apis#sell-vero_public_apis-vero_report-createveroreport">createVeroReport</a> method.
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

    /**
     * <span class="tablenote"><b>Note:</b> All methods of the <b>VeRO API</b> have been deprecated, and will be decommissioned on September 30th, 2026.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to create a VeRO report for a listing. VeRO reports can be used to report items that your copyright, trademark, or other intellectual property rights.<br><br>The <b>itemId</b> of the item being reported must be provided in the request, as well as the <b>veroReasonCodeId</b> of the claimed infringement.<br><br>You can report one or more items at a time using this method. A maximum of 150 items can be reported using this method.
     * @param VeroReportItemsRequest $body This type defines the request fields used in the <b>createVeroReport</b> method.
     * @param Vero_reportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VeroReportItemsResponse|null>
     * @throws Exception
    */
    public function post(VeroReportItemsRequest $body, ?Vero_reportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VeroReportItemsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><b>Note:</b> All methods of the <b>VeRO API</b> have been deprecated, and will be decommissioned on September 30th, 2026.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to create a VeRO report for a listing. VeRO reports can be used to report items that your copyright, trademark, or other intellectual property rights.<br><br>The <b>itemId</b> of the item being reported must be provided in the request, as well as the <b>veroReasonCodeId</b> of the claimed infringement.<br><br>You can report one or more items at a time using this method. A maximum of 150 items can be reported using this method.
     * @param VeroReportItemsRequest $body This type defines the request fields used in the <b>createVeroReport</b> method.
     * @param Vero_reportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VeroReportItemsRequest $body, ?Vero_reportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Vero_reportRequestBuilder
    */
    public function withUrl(string $rawUrl): Vero_reportRequestBuilder {
        return new Vero_reportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
