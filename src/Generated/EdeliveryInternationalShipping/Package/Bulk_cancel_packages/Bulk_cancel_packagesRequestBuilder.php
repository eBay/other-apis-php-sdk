<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\Bulk_cancel_packages;

use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CancelPackagesRequest;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models\CancelPackagesResponses;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /package/bulk_cancel_packages
*/
class Bulk_cancel_packagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_cancel_packagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/package/bulk_cancel_packages');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to cancel multiple packages and their associated tracking numbers.<br><br>The package ID values for the packages to be canceled must be input in the <b>packageIds</b> array of the request.<br><br><span class="tablenote"><b>Note:</b> Packages cannot be cancelled if they are currently being processed.</span> 
     * @param CancelPackagesRequest $body This type defines the request container for the <b>bulkCancelPackages</b> method.
     * @param Bulk_cancel_packagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CancelPackagesResponses|null>
     * @throws Exception
    */
    public function post(CancelPackagesRequest $body, ?Bulk_cancel_packagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CancelPackagesResponses::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to cancel multiple packages and their associated tracking numbers.<br><br>The package ID values for the packages to be canceled must be input in the <b>packageIds</b> array of the request.<br><br><span class="tablenote"><b>Note:</b> Packages cannot be cancelled if they are currently being processed.</span> 
     * @param CancelPackagesRequest $body This type defines the request container for the <b>bulkCancelPackages</b> method.
     * @param Bulk_cancel_packagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CancelPackagesRequest $body, ?Bulk_cancel_packagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_cancel_packagesRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_cancel_packagesRequestBuilder {
        return new Bulk_cancel_packagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
