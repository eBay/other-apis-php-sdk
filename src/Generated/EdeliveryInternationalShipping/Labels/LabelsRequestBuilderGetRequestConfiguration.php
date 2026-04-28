<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Labels;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LabelsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LabelsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LabelsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LabelsRequestBuilderGetQueryParameters.
     * @param string|null $page_size This query parameter specifies the page size of the retrieved shipping labels.<br><br><b>Valid values</b>:<ul><li><code>A4</code></li><li><code>THERMAL_PAPER</code></li></ul>
     * @param string|null $print_preference This query parameter specifies one or more printing preferences to be set when retrieving shipping labels. Multiple values can be delimited by a comma.<br><br><b>Valid values</b>:<ul><li><code>nameZh</code></li><li><code>nameEn</code></li><li><code>remark</code></li><li><code>skuPrice</code></li><li><code>skuNo</code></li><li><code>quantity</code></li><li><code>listingId</code></li><li><code>sellerId</code></li><li><code>buyerId</code></li></ul>
     * @param string|null $tracking_numbers This query parameter specifies an array of tracking numbers of the packages for which to retrieve shipping labels.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters.For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
     * @return LabelsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $page_size = null, ?string $print_preference = null, ?string $tracking_numbers = null): LabelsRequestBuilderGetQueryParameters {
        return new LabelsRequestBuilderGetQueryParameters($page_size, $print_preference, $tracking_numbers);
    }

}
