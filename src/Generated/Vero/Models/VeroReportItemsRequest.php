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

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the request fields used in the <b>createVeroReport</b> method.
*/
class VeroReportItemsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ReportItemDetails>|null $reportItems This array is used to report one or more eBay items that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.<br><br>The <b>itemId</b> and <b>veroReasonCodeId</b> fields are required for each reported violation.<br><br><span class="tablenote"><b>Note:</b> You can report the same item more than once if a different reason code is used each time.</span>
    */
    private ?array $reportItems = null;
    
    /**
     * Instantiates a new VeroReportItemsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReportItemsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReportItemsRequest {
        return new VeroReportItemsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'reportItems' => fn(ParseNode $n) => $o->setReportItems($n->getCollectionOfObjectValues([ReportItemDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the reportItems property value. This array is used to report one or more eBay items that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.<br><br>The <b>itemId</b> and <b>veroReasonCodeId</b> fields are required for each reported violation.<br><br><span class="tablenote"><b>Note:</b> You can report the same item more than once if a different reason code is used each time.</span>
     * @return array<ReportItemDetails>|null
    */
    public function getReportItems(): ?array {
        return $this->reportItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('reportItems', $this->getReportItems());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the reportItems property value. This array is used to report one or more eBay items that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.<br><br>The <b>itemId</b> and <b>veroReasonCodeId</b> fields are required for each reported violation.<br><br><span class="tablenote"><b>Note:</b> You can report the same item more than once if a different reason code is used each time.</span>
     * @param array<ReportItemDetails>|null $value Value to set for the reportItems property.
    */
    public function setReportItems(?array $value): void {
        $this->reportItems = $value;
    }

}
