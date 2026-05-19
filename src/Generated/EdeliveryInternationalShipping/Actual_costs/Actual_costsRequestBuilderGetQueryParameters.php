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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Actual_costs;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method is used to retrieve the actual weight and cost for one or more packages based on the provided input criteria.<br><br>Responses can be filtered by the <b>tracking_numbers</b> query parameter. If this parameter is used, actual costs for each package associated with the provided tracking numbers are returned.<br><br>Alternatively, responses can be filtered by the <b>trans_begin_time</b> and <b>trans_end_time</b> query parameters. If these parameters are used, the actual costs of all packages created within this date range are returned.<br><br>Only one filtering method can be used per call.
*/
class Actual_costsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("tracking_numbers")
     * @var string|null $trackingNumbers This query parameter specifies the tracking number(s) of the package(s) for which to retrieve the actual weight and cost. Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided.<br><br><span class="tablenote"><b>Note:</b> This query parameter is required if <b>trans_begin_time</b> and <b>trans_end_time</b> is not provided.</span>
    */
    public ?string $trackingNumbers = null;
    
    /**
     * @QueryParameter("trans_begin_time")
     * @var string|null $transBeginTime This query parameter specifies the start time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_end_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
    */
    public ?string $transBeginTime = null;
    
    /**
     * @QueryParameter("trans_end_time")
     * @var string|null $transEndTime This query parameter specifies ending time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_start_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
    */
    public ?string $transEndTime = null;
    
    /**
     * Instantiates a new Actual_costsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $tracking_numbers This query parameter specifies the tracking number(s) of the package(s) for which to retrieve the actual weight and cost. Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided.<br><br><span class="tablenote"><b>Note:</b> This query parameter is required if <b>trans_begin_time</b> and <b>trans_end_time</b> is not provided.</span>
     * @param string|null $trans_begin_time This query parameter specifies the start time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_end_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @param string|null $trans_end_time This query parameter specifies ending time of a transaction in UTC format.<br><br>If the the </b>trans_begin_time</b> and <b>trans_end_time</b> query parameters are used, the actual costs of all packages created within this date range are returned.<br><br><span class="tablenote"><b>Note:</b> This query parameter and <b>trans_start_time</b> are required if <b>tracking_numbers</b> is not provided.</span><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
    */
    public function __construct(?string $tracking_numbers = null, ?string $trans_begin_time = null, ?string $trans_end_time = null) {
        $this->trackingNumbers = $tracking_numbers;
        $this->transBeginTime = $trans_begin_time;
        $this->transEndTime = $trans_end_time;
    }

}
