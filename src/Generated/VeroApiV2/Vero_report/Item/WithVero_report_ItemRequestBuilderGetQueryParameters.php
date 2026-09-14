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

namespace EBay\OtherApis\Generated\VeroApiV2\Vero_report\Item;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method retrieves status information about a VeRO report you have submitted to eBay for copyright, trademark, or other intellectual property rights infringement.<br><br>The <b>vero_report_id</b> path parameter is used to specify the eBay report for which to retrieve status information.
*/
class WithVero_report_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("include_report_details")
     * @var bool|null $includeReportDetails Include this query and set it to <code>true</code> if you want to retrieve the <b>reportedDetails</b> container in the response, which contains status information. This container may be helpful if you have reported violations on more than one eBay item in the report.<br><br>By default, this boolean is set to <code>false</code>.
    */
    public ?bool $includeReportDetails = null;
    
    /**
     * Instantiates a new WithVero_report_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $include_report_details Include this query and set it to <code>true</code> if you want to retrieve the <b>reportedDetails</b> container in the response, which contains status information. This container may be helpful if you have reported violations on more than one eBay item in the report.<br><br>By default, this boolean is set to <code>false</code>.
    */
    public function __construct(?bool $include_report_details = null) {
        $this->includeReportDetails = $include_report_details;
    }

}
