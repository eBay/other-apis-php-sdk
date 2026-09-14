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
 * This type defines the response fields used in the <b>createVeroReport</b> method.
*/
class VeroReportItemsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $veroReportId The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
    */
    private ?string $veroReportId = null;
    
    /**
     * @var VeroReportStatusEnum|null $veroReportStatus The processing status of the VeRO report.
    */
    private ?VeroReportStatusEnum $veroReportStatus = null;
    
    /**
     * Instantiates a new VeroReportItemsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReportItemsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReportItemsResponse {
        return new VeroReportItemsResponse();
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
            'veroReportId' => fn(ParseNode $n) => $o->setVeroReportId($n->getStringValue()),
            'veroReportStatus' => fn(ParseNode $n) => $o->setVeroReportStatus($n->getEnumValue(VeroReportStatusEnum::class)),
        ];
    }

    /**
     * Gets the veroReportId property value. The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @return string|null
    */
    public function getVeroReportId(): ?string {
        return $this->veroReportId;
    }

    /**
     * Gets the veroReportStatus property value. The processing status of the VeRO report.
     * @return VeroReportStatusEnum|null
    */
    public function getVeroReportStatus(): ?VeroReportStatusEnum {
        return $this->veroReportStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('veroReportId', $this->getVeroReportId());
        $writer->writeEnumValue('veroReportStatus', $this->getVeroReportStatus());
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
     * Sets the veroReportId property value. The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param string|null $value Value to set for the veroReportId property.
    */
    public function setVeroReportId(?string $value): void {
        $this->veroReportId = $value;
    }

    /**
     * Sets the veroReportStatus property value. The processing status of the VeRO report.
     * @param VeroReportStatusEnum|null $value Value to set for the veroReportStatus property.
    */
    public function setVeroReportStatus(?VeroReportStatusEnum $value): void {
        $this->veroReportStatus = $value;
    }

}
