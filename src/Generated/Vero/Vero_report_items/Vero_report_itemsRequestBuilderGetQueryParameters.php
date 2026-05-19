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

namespace EBay\OtherApis\Generated\Vero\Vero_report_items;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> You must be a member of the Verified Rights Owner (VeRO) Program to use this call.</p></div><br>This method can be used to retrieve status information about one or more VeRO reported items you have submitted.<br><br>Without the use of any query parameters, the default behavior of this method is to return the status of all VeRO reported items submitted by the seller during the last two years. Use the <b>itemId</b> query parameter to see a specific reported item, and use the <b>filter</b> query to retrieve the status of reported items submitted within a specific date range. Pagination is also available to limit the number of reported items that are retrieved per page of data.
*/
class Vero_report_itemsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter This query parameter can be used to filter the result set by a date range. Only items reported within the specified time period will be returned.<br><br>This parameter will be ignored if <b>itemId</b> has been specified.<br><br><b>Format:</b> <code>YYYY-MM-DD HH:MM:SS</code><br><br><b>Example</b>: <code>reportSubmittedDate:[2024-11-14T07:47:48Z..2024-12-14T07:47:48Z]</code>.
    */
    public ?string $filter = null;
    
    /**
     * @var string|null $itemId This query parameter specifies the unique identifier of an eBay listing. Only the specified reported item will be returned.
    */
    public ?string $itemId = null;
    
    /**
     * @var string|null $limit The maximum number of entries that can be returned on each page of the paginated response. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of reports to skip in the result set before returning the first report in the paginated response. Combine offset with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 reports from the complete list of reports retrieved by the call. If this query parameter is not set, the default value is used and the first page of reports is returned.<br><br><b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Vero_report_itemsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter This query parameter can be used to filter the result set by a date range. Only items reported within the specified time period will be returned.<br><br>This parameter will be ignored if <b>itemId</b> has been specified.<br><br><b>Format:</b> <code>YYYY-MM-DD HH:MM:SS</code><br><br><b>Example</b>: <code>reportSubmittedDate:[2024-11-14T07:47:48Z..2024-12-14T07:47:48Z]</code>.
     * @param string|null $itemId This query parameter specifies the unique identifier of an eBay listing. Only the specified reported item will be returned.
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25
     * @param string|null $offset The number of reports to skip in the result set before returning the first report in the paginated response. Combine offset with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 reports from the complete list of reports retrieved by the call. If this query parameter is not set, the default value is used and the first page of reports is returned.<br><br><b>Default:</b> 0
    */
    public function __construct(?string $filter = null, ?string $itemId = null, ?string $limit = null, ?string $offset = null) {
        $this->filter = $filter;
        $this->itemId = $itemId;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
