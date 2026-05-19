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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Handover_sheet;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve the handover sheet for one or more packages in a pickup request.<br><br>The tracking numbers for the packages for which to retrieve handover sheets are specified through the <b>tracking_numbers</b> query parameter.<br><br>The retrieved handover sheet will be returned as a base64 string value, and can be used for confirmation with a pickup contact. Only one handover sheet will be returned for the specified packages.
*/
class Handover_sheetRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("tracking_numbers")
     * @var string|null $trackingNumbers This query parameter specifies an array of tracking numbers for the packages for which to retrieve a handover sheet.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters. For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
    */
    public ?string $trackingNumbers = null;
    
    /**
     * Instantiates a new Handover_sheetRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $tracking_numbers This query parameter specifies an array of tracking numbers for the packages for which to retrieve a handover sheet.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters. For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
    */
    public function __construct(?string $tracking_numbers = null) {
        $this->trackingNumbers = $tracking_numbers;
    }

}
