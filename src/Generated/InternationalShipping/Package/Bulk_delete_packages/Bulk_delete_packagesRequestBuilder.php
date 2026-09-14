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

namespace EBay\OtherApis\Generated\InternationalShipping\Package\Bulk_delete_packages;

use EBay\OtherApis\Generated\InternationalShipping\Models\DeletePackagesRequest;
use EBay\OtherApis\Generated\InternationalShipping\Models\DeletePackagesResponses;
use EBay\OtherApis\Generated\InternationalShipping\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /package/bulk_delete_packages
*/
class Bulk_delete_packagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_delete_packagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/package/bulk_delete_packages');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to delete multiple packages.<br><br>The package ID values for the packages to be deleted must be input in the <b>packageIds</b> array of the request.<br><br><span class="tablenote"><b>Note:</b> Packages can only be deleted once they have been cancelled through the <b>cancelPackage</b> or <b>bulkCancelPackages</b> methods and no longer have a tracking number associated with them.</span>
     * @param DeletePackagesRequest $body This type defines the request container for the <b>bulkDeletePackages</b> method.
     * @param Bulk_delete_packagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeletePackagesResponses|null>
     * @throws Exception
    */
    public function post(DeletePackagesRequest $body, ?Bulk_delete_packagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '401' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeletePackagesResponses::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to delete multiple packages.<br><br>The package ID values for the packages to be deleted must be input in the <b>packageIds</b> array of the request.<br><br><span class="tablenote"><b>Note:</b> Packages can only be deleted once they have been cancelled through the <b>cancelPackage</b> or <b>bulkCancelPackages</b> methods and no longer have a tracking number associated with them.</span>
     * @param DeletePackagesRequest $body This type defines the request container for the <b>bulkDeletePackages</b> method.
     * @param Bulk_delete_packagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeletePackagesRequest $body, ?Bulk_delete_packagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_delete_packagesRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_delete_packagesRequestBuilder {
        return new Bulk_delete_packagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
