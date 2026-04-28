<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Actual_costs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Actual_costsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Actual_costsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Actual_costsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Actual_costsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Actual_costsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Actual_costsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Actual_costsRequestBuilderGetQueryParameters.
     * @param string|null $tracking_numbers This query parameter specifies the tracking number(s) of the package(s) for which to retrieve the actual weight and cost. Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided.<br><br><span class="tablenote"><b>Note:</b> This query parameter is required if <b>trans_begin_time</b> and <b>trans_end_time</b> is not provided.</span>
     * @param string|null $trans_begin_time This query parameter specifies the start time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_end_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @param string|null $trans_end_time This query parameter specifies ending time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_start_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @return Actual_costsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $tracking_numbers = null, ?string $trans_begin_time = null, ?string $trans_end_time = null): Actual_costsRequestBuilderGetQueryParameters {
        return new Actual_costsRequestBuilderGetQueryParameters($tracking_numbers, $trans_begin_time, $trans_end_time);
    }

}
