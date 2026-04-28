<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Agents;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgentsRequestBuilderGetQueryParameters.
     * @param string|null $limit This query parameter sets the maximum number of agents to return on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves orders 11 through 20 from the result set.<br><br><b>Max</b>: <code>200</code><br><br><b>Default</b>: <code>50</code>
     * @param string|null $offset This query parameter specifies the number of agents to skip in the result set before returning the first agent in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call.<br><br><b>Default</b>: <code>0</code>
     * @return AgentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null): AgentsRequestBuilderGetQueryParameters {
        return new AgentsRequestBuilderGetQueryParameters($limit, $offset);
    }

}
