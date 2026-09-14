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

namespace EBay\OtherApis\Generated\VeroApiV2\Report_vero_violations;

use EBay\OtherApis\Generated\VeroApiV2\Models\Error;
use EBay\OtherApis\Generated\VeroApiV2\Models\ReportVeroViolationRequest;
use EBay\OtherApis\Generated\VeroApiV2\Models\ReportVeroViolationResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /report_vero_violations
*/
class Report_vero_violationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Report_vero_violationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/report_vero_violations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to report a violation for an item that allegedly infringes on your copyright, trademark, or other intellectual property rights.<br><br><span class="tablenote"><b>Note:</b> Reporting for shoppable videos will be available in a future release. Live events can only be reported using the VeRO reason code <b>9731</b>.</span><br>The request body must include <b>reporterId</b> (the submitting entity's VeRO account identifier), <b>rightsOwnerId</b> (the ID of the Rights Owner from the VeRO Portal), a <b>reportViolations</b> array (with the <b>itemId</b> for each reported item), the <b>veroReasonCodeId</b> of the claimed infringement, and the <b>reportType</b> identifying the kind of content being reported.<br><br>You can report one or more items at a time using this method. A maximum of 150 violations can be reported using this method.
     * @param ReportVeroViolationRequest $body This type defines the request fields used in the <b>reportVeroViolation</b> method.
     * @param Report_vero_violationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReportVeroViolationResponse|null>
     * @throws Exception
    */
    public function post(ReportVeroViolationRequest $body, ?Report_vero_violationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReportVeroViolationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to report a violation for an item that allegedly infringes on your copyright, trademark, or other intellectual property rights.<br><br><span class="tablenote"><b>Note:</b> Reporting for shoppable videos will be available in a future release. Live events can only be reported using the VeRO reason code <b>9731</b>.</span><br>The request body must include <b>reporterId</b> (the submitting entity's VeRO account identifier), <b>rightsOwnerId</b> (the ID of the Rights Owner from the VeRO Portal), a <b>reportViolations</b> array (with the <b>itemId</b> for each reported item), the <b>veroReasonCodeId</b> of the claimed infringement, and the <b>reportType</b> identifying the kind of content being reported.<br><br>You can report one or more items at a time using this method. A maximum of 150 violations can be reported using this method.
     * @param ReportVeroViolationRequest $body This type defines the request fields used in the <b>reportVeroViolation</b> method.
     * @param Report_vero_violationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReportVeroViolationRequest $body, ?Report_vero_violationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Report_vero_violationsRequestBuilder
    */
    public function withUrl(string $rawUrl): Report_vero_violationsRequestBuilder {
        return new Report_vero_violationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
