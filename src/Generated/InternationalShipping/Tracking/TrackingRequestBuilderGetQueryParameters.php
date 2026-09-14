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

namespace EBay\OtherApis\Generated\InternationalShipping\Tracking;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve tracking event details for a package associated with the provided tracking number.<br><br>Each tracking event is returned in the <b>trackingDetails</b> array and includes the description, location, time, and status of the event.
*/
class TrackingRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("tracking_number")
     * @var string|null $trackingNumber This query parameter specifies the tracking number for which to retrieve current tracking event details.<br><br>This value is returned when creating a package through the <a href="/develop/api/sell/edelivery_international_shipping_api#sell-edelivery_international_shipping_api-package-createpackage">createPackage</a> method.
    */
    public ?string $trackingNumber = null;
    
    /**
     * Instantiates a new TrackingRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $tracking_number This query parameter specifies the tracking number for which to retrieve current tracking event details.<br><br>This value is returned when creating a package through the <a href="/develop/api/sell/edelivery_international_shipping_api#sell-edelivery_international_shipping_api-package-createpackage">createPackage</a> method.
    */
    public function __construct(?string $tracking_number = null) {
        $this->trackingNumber = $tracking_number;
    }

}
