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

namespace EBay\OtherApis\Generated\InternationalShipping\Package;

use EBay\OtherApis\Generated\InternationalShipping\Models\AddPackageRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\AddPackageResponses;
use EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_cancel_packages\Bulk_cancel_packagesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_confirm_packages\Bulk_confirm_packagesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_delete_packages\Bulk_delete_packagesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Package\Item\Order_line_item_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /package
*/
class PackageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The bulk_cancel_packages property
    */
    public function bulk_cancel_packages(): Bulk_cancel_packagesRequestBuilder {
        return new Bulk_cancel_packagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_confirm_packages property
    */
    public function bulk_confirm_packages(): Bulk_confirm_packagesRequestBuilder {
        return new Bulk_confirm_packagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_delete_packages property
    */
    public function bulk_delete_packages(): Bulk_delete_packagesRequestBuilder {
        return new Bulk_delete_packagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OtherApis/Generated/InternationalShipping.package.item collection
     * @param string $order_line_item_Id This path parameter specifies the unique identifier of the package being retrieved.<br><br>This ID value is returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.
     * @return Order_line_item_ItemRequestBuilder
    */
    public function byOrder_line_item_Id(string $order_line_item_Id): Order_line_item_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['order_line_item_%2Did'] = $order_line_item_Id;
        return new Order_line_item_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PackageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/package');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to create a package for an order.<br><br>To create a package, the package's shipping information, such as the dimensions, weight, ship from, and ship to address, as well as information about the item(s) it contains must be specified in the request.<br><br>If the call is successful, the <b>packageId</b> and tracking number for the newly created package will be returned.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>packageId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param AddPackageRequest $body This type defines the request container used in the <b>createPackage</b> method.
     * @param PackageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AddPackageResponses|null>
     * @throws Exception
    */
    public function post(AddPackageRequest $body, ?PackageRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AddPackageResponses::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to create a package for an order.<br><br>To create a package, the package's shipping information, such as the dimensions, weight, ship from, and ship to address, as well as information about the item(s) it contains must be specified in the request.<br><br>If the call is successful, the <b>packageId</b> and tracking number for the newly created package will be returned.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>packageId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param AddPackageRequest $body This type defines the request container used in the <b>createPackage</b> method.
     * @param PackageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddPackageRequest $body, ?PackageRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PackageRequestBuilder
    */
    public function withUrl(string $rawUrl): PackageRequestBuilder {
        return new PackageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
