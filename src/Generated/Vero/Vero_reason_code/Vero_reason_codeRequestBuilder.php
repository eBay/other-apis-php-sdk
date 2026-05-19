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

namespace EBay\OtherApis\Generated\Vero\Vero_reason_code;

use EBay\OtherApis\Generated\Vero\Models\VeroReasonCodeDetailResponse;
use EBay\OtherApis\Generated\Vero\Vero_reason_code\Item\WithVero_reason_code_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /vero_reason_code
*/
class Vero_reason_codeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OtherApis/Generated/Vero.vero_reason_code.item collection
     * @param string $vero_reason_code_id This path parameter specifies the unique identifier of the VeRO reason code that is to be retrieved.<br><br>Use the <a href="/api-docs/commerce/vero/resources/vero_reason_code/methods/getVeroReasonCodes" target="_blank ">getVeroReasonCodes</a> method to retrieve supported VeRO reason code IDs.
     * @return WithVero_reason_code_ItemRequestBuilder
    */
    public function byVero_reason_code_id(string $vero_reason_code_id): WithVero_reason_code_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vero_reason_code_id'] = $vero_reason_code_id;
        return new WithVero_reason_code_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Vero_reason_codeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/vero_reason_code');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method is used to retrieve the details of an array of VeRO reason codes. This information includes the descriptions of each code, as well as the marketplace associated with each code.<br><br> If the <b>X-EBAY-C-MARKETPLACE-ID</b> header is present, only VeRO reason codes for that specific site will be returned. If this header is not included, all reason codes for all sites are returned.
     * @param Vero_reason_codeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VeroReasonCodeDetailResponse|null>
     * @throws Exception
    */
    public function get(?Vero_reason_codeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VeroReasonCodeDetailResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method is used to retrieve the details of an array of VeRO reason codes. This information includes the descriptions of each code, as well as the marketplace associated with each code.<br><br> If the <b>X-EBAY-C-MARKETPLACE-ID</b> header is present, only VeRO reason codes for that specific site will be returned. If this header is not included, all reason codes for all sites are returned.
     * @param Vero_reason_codeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Vero_reason_codeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Vero_reason_codeRequestBuilder
    */
    public function withUrl(string $rawUrl): Vero_reason_codeRequestBuilder {
        return new Vero_reason_codeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
