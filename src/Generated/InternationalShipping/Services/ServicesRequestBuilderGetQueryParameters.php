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

namespace EBay\OtherApis\Generated\InternationalShipping\Services;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This method is only available for Greater-China based sellers with an active eDIS account.</p></div><br>This method can be used to retrieve metadata on available shipping services, such as the name, description, and directions.
*/
class ServicesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit This query parameter sets the maximum number of shipping services to return on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves orders 11 through 20 from the result set.<br><br><b>Max</b>: <code>200</code><br><br><b>Default</b>: <code>50</code>
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset This query parameter specifies the number of shipping services to skip in the result set before returning the first shipping service in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call.<br><br><b>Default</b>: <code>0</code>
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new ServicesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit This query parameter sets the maximum number of shipping services to return on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves orders 11 through 20 from the result set.<br><br><b>Max</b>: <code>200</code><br><br><b>Default</b>: <code>50</code>
     * @param string|null $offset This query parameter specifies the number of shipping services to skip in the result set before returning the first shipping service in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call.<br><br><b>Default</b>: <code>0</code>
    */
    public function __construct(?string $limit = null, ?string $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
