<?php

namespace EBay\OtherApis\Generated\Vero\Vero_report\Item;

use EBay\OtherApis\Generated\Vero\Models\ReportStatusResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /vero_report/{vero_report_id}
*/
class WithVero_report_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithVero_report_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/vero_report/{vero_report_id}{?includeItemDetails*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to retrieve status information about a VeRO report you have submitted to eBay for copyright, trademark, or other intellectual property rights infringement.<br><br>The <b>vero_report_id</b> path parameter is used to specify the eBay report for which to retrieve status information.
     * @param WithVero_report_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReportStatusResponse|null>
     * @throws Exception
    */
    public function get(?WithVero_report_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ReportStatusResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to retrieve status information about a VeRO report you have submitted to eBay for copyright, trademark, or other intellectual property rights infringement.<br><br>The <b>vero_report_id</b> path parameter is used to specify the eBay report for which to retrieve status information.
     * @param WithVero_report_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithVero_report_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithVero_report_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithVero_report_ItemRequestBuilder {
        return new WithVero_report_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
