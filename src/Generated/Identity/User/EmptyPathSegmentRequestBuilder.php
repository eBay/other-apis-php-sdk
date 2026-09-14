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

namespace EBay\OtherApis\Generated\Identity\User;

use EBay\OtherApis\Generated\Identity\Models\Error;
use EBay\OtherApis\Generated\Identity\Models\UserResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /user/
*/
class EmptyPathSegmentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EmptyPathSegmentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/user/');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the account profile information for an authenticated user, which requires a <strong>User access token</strong>. What is returned is controlled by the <strong>scopes</strong>. <p>For a business account you use the default scope <code>commerce.identity.readonly</code>, which returns all the fields in the <strong>businessAccount</strong> container. These are returned because this is all public information.</p>  <p> For an individual account, the fields returned in the <strong>individualAccount</strong> container are based on the scope you use. Using the default scope, only public information, such as eBay user ID, are returned. For details about what each scope returns, see the <strong>Identity API scopes</strong>.</p>
     * @param EmptyPathSegmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserResponse|null>
     * @throws Exception
    */
    public function get(?EmptyPathSegmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves the account profile information for an authenticated user, which requires a <strong>User access token</strong>. What is returned is controlled by the <strong>scopes</strong>. <p>For a business account you use the default scope <code>commerce.identity.readonly</code>, which returns all the fields in the <strong>businessAccount</strong> container. These are returned because this is all public information.</p>  <p> For an individual account, the fields returned in the <strong>individualAccount</strong> container are based on the scope you use. Using the default scope, only public information, such as eBay user ID, are returned. For details about what each scope returns, see the <strong>Identity API scopes</strong>.</p>
     * @param EmptyPathSegmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmptyPathSegmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmptyPathSegmentRequestBuilder
    */
    public function withUrl(string $rawUrl): EmptyPathSegmentRequestBuilder {
        return new EmptyPathSegmentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
