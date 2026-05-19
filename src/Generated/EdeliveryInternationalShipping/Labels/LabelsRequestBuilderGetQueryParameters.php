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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Labels;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve shipping labels for the one or more specified packages.<br><br>The packages for which to retrieve shipping labels can be specified through the <b>tracking_numbers</b> query parameter. The page size and print preference settings for the shipping label(s) can also be specified through the query parameters.<br><br>Shipping labels are returned as base64 string values which can be converted to PDF files. A separate file will be returned for each tracking number specified in the request.
*/
class LabelsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("page_size")
     * @var string|null $pageSize This query parameter specifies the page size of the retrieved shipping labels.<br><br><b>Valid values</b>:<ul><li><code>A4</code></li><li><code>THERMAL_PAPER</code></li></ul>
    */
    public ?string $pageSize = null;
    
    /**
     * @QueryParameter("print_preference")
     * @var string|null $printPreference This query parameter specifies one or more printing preferences to be set when retrieving shipping labels. Multiple values can be delimited by a comma.<br><br><b>Valid values</b>:<ul><li><code>nameZh</code></li><li><code>nameEn</code></li><li><code>remark</code></li><li><code>skuPrice</code></li><li><code>skuNo</code></li><li><code>quantity</code></li><li><code>listingId</code></li><li><code>sellerId</code></li><li><code>buyerId</code></li></ul>
    */
    public ?string $printPreference = null;
    
    /**
     * @QueryParameter("tracking_numbers")
     * @var string|null $trackingNumbers This query parameter specifies an array of tracking numbers of the packages for which to retrieve shipping labels.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters.For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
    */
    public ?string $trackingNumbers = null;
    
    /**
     * Instantiates a new LabelsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $page_size This query parameter specifies the page size of the retrieved shipping labels.<br><br><b>Valid values</b>:<ul><li><code>A4</code></li><li><code>THERMAL_PAPER</code></li></ul>
     * @param string|null $print_preference This query parameter specifies one or more printing preferences to be set when retrieving shipping labels. Multiple values can be delimited by a comma.<br><br><b>Valid values</b>:<ul><li><code>nameZh</code></li><li><code>nameEn</code></li><li><code>remark</code></li><li><code>skuPrice</code></li><li><code>skuNo</code></li><li><code>quantity</code></li><li><code>listingId</code></li><li><code>sellerId</code></li><li><code>buyerId</code></li></ul>
     * @param string|null $tracking_numbers This query parameter specifies an array of tracking numbers of the packages for which to retrieve shipping labels.<br><br>Tracking numbers are returned when creating packages through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.<br><br>Up to 200 tracking numbers can be provided. Multiple tracking numbers can be input as individual query parameters.For example,<br><br><code>tracking_numbers=E***********************N&tracking_numbers=E***********************Q</code>
    */
    public function __construct(?string $page_size = null, ?string $print_preference = null, ?string $tracking_numbers = null) {
        $this->pageSize = $page_size;
        $this->printPreference = $print_preference;
        $this->trackingNumbers = $tracking_numbers;
    }

}
