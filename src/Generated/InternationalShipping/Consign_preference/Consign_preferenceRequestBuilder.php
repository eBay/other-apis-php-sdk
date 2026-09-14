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

namespace EBay\OtherApis\Generated\InternationalShipping\Consign_preference;

use EBay\OtherApis\Generated\InternationalShipping\Models\CreateConsignPreferenceRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\CreateConsignPreferenceResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\GetConsignPreferenceListResponses;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /consign_preference
*/
class Consign_preferenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Consign_preferenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/consign_preference');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve information about all the pickup, drop-off, and/or forward deployment consign addresses associated with a seller's eDIS account.
     * @param Consign_preferenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetConsignPreferenceListResponses|null>
     * @throws Exception
    */
    public function get(?Consign_preferenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetConsignPreferenceListResponses::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to create a consign address.<br><br>The following types of address preferences can be created via this method:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></li><li><code>RDC</code></li><li><code>CN_POST_DROP_OFF</code></li><li><code>CN_POST_PICK_UP</code></li><li><code>HK_POST_DROP_OFF</code></ul>The address information for the consign address must be provided in the <b>consignAddress</b> container. If the call is successful, the <b>addressId</b> for the newly created address will be returned. This ID can then be used when creating a package to specify the consign address to use for the shipment.
     * @param CreateConsignPreferenceRequest $body This type is used to define the request container of the <b>createConsignPreference</b> method.
     * @param Consign_preferenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateConsignPreferenceResponses|null>
     * @throws Exception
    */
    public function post(CreateConsignPreferenceRequest $body, ?Consign_preferenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateConsignPreferenceResponses::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve information about all the pickup, drop-off, and/or forward deployment consign addresses associated with a seller's eDIS account.
     * @param Consign_preferenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Consign_preferenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to create a consign address.<br><br>The following types of address preferences can be created via this method:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></li><li><code>RDC</code></li><li><code>CN_POST_DROP_OFF</code></li><li><code>CN_POST_PICK_UP</code></li><li><code>HK_POST_DROP_OFF</code></ul>The address information for the consign address must be provided in the <b>consignAddress</b> container. If the call is successful, the <b>addressId</b> for the newly created address will be returned. This ID can then be used when creating a package to specify the consign address to use for the shipment.
     * @param CreateConsignPreferenceRequest $body This type is used to define the request container of the <b>createConsignPreference</b> method.
     * @param Consign_preferenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateConsignPreferenceRequest $body, ?Consign_preferenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Consign_preferenceRequestBuilder
    */
    public function withUrl(string $rawUrl): Consign_preferenceRequestBuilder {
        return new Consign_preferenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
