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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle;

use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\Item\WithBundle_ItemRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateBundleRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CreateBundleResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bundle
*/
class BundleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OtherApis/Generated/EdeliveryInternationalShipping.bundle.item collection
     * @param string $bundle_id This path parameter specifies the unique identifier of the bundle being retrieved.<br><br>This ID value is returned when creating a bundle through the <a href="/api-docs/sell/edelivery_international_shipping/resources/bundle/methods/createBundle" target="_blank">createBundle</a> method.
     * @return WithBundle_ItemRequestBuilder
    */
    public function byBundle_id(string $bundle_id): WithBundle_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bundle_id'] = $bundle_id;
        return new WithBundle_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BundleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bundle');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method is used to create a bundle for multiple packages in an order.<br><br>To create a bundle, the consign address to be associated with the bundle and the tracking numbers of the packages to be used in the bundle must be specified in the request. <br><br>If the call is successful, the <b>bundleId</b> for the newly created bundle will be returned.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>bundleId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param CreateBundleRequest $body This type defines the request container of the <b>createBundle</b> method.
     * @param BundleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateBundleResponse|null>
     * @throws Exception
    */
    public function post(CreateBundleRequest $body, ?BundleRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateBundleResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method is used to create a bundle for multiple packages in an order.<br><br>To create a bundle, the consign address to be associated with the bundle and the tracking numbers of the packages to be used in the bundle must be specified in the request. <br><br>If the call is successful, the <b>bundleId</b> for the newly created bundle will be returned.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>bundleId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param CreateBundleRequest $body This type defines the request container of the <b>createBundle</b> method.
     * @param BundleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateBundleRequest $body, ?BundleRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BundleRequestBuilder
    */
    public function withUrl(string $rawUrl): BundleRequestBuilder {
        return new BundleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
