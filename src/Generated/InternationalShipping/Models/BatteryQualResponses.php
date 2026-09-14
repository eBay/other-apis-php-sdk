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

namespace EBay\OtherApis\Generated\InternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields to describe a battery's qualifications.
*/
class BatteryQualResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $batteryType The type of the battery. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:LiBatteryTypeEnum'>eBay API documentation</a>
    */
    private ?string $batteryType = null;
    
    /**
     * @var string|null $elecQualificationId The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.
    */
    private ?string $elecQualificationId = null;
    
    /**
     * @var string|null $elecQualificationName The name of the battery's electric qualification.
    */
    private ?string $elecQualificationName = null;
    
    /**
     * @var string|null $expireDate The expiration date of the battery qualification.
    */
    private ?string $expireDate = null;
    
    /**
     * @var string|null $remark A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $remark = null;
    
    /**
     * Instantiates a new BatteryQualResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatteryQualResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatteryQualResponses {
        return new BatteryQualResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the batteryType property value. The type of the battery. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:LiBatteryTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getBatteryType(): ?string {
        return $this->batteryType;
    }

    /**
     * Gets the elecQualificationId property value. The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.
     * @return string|null
    */
    public function getElecQualificationId(): ?string {
        return $this->elecQualificationId;
    }

    /**
     * Gets the elecQualificationName property value. The name of the battery's electric qualification.
     * @return string|null
    */
    public function getElecQualificationName(): ?string {
        return $this->elecQualificationName;
    }

    /**
     * Gets the expireDate property value. The expiration date of the battery qualification.
     * @return string|null
    */
    public function getExpireDate(): ?string {
        return $this->expireDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryType' => fn(ParseNode $n) => $o->setBatteryType($n->getStringValue()),
            'elecQualificationId' => fn(ParseNode $n) => $o->setElecQualificationId($n->getStringValue()),
            'elecQualificationName' => fn(ParseNode $n) => $o->setElecQualificationName($n->getStringValue()),
            'expireDate' => fn(ParseNode $n) => $o->setExpireDate($n->getStringValue()),
            'remark' => fn(ParseNode $n) => $o->setRemark($n->getStringValue()),
        ];
    }

    /**
     * Gets the remark property value. A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getRemark(): ?string {
        return $this->remark;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('batteryType', $this->getBatteryType());
        $writer->writeStringValue('elecQualificationId', $this->getElecQualificationId());
        $writer->writeStringValue('elecQualificationName', $this->getElecQualificationName());
        $writer->writeStringValue('expireDate', $this->getExpireDate());
        $writer->writeStringValue('remark', $this->getRemark());
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
     * Sets the batteryType property value. The type of the battery. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:LiBatteryTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the batteryType property.
    */
    public function setBatteryType(?string $value): void {
        $this->batteryType = $value;
    }

    /**
     * Sets the elecQualificationId property value. The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.
     * @param string|null $value Value to set for the elecQualificationId property.
    */
    public function setElecQualificationId(?string $value): void {
        $this->elecQualificationId = $value;
    }

    /**
     * Sets the elecQualificationName property value. The name of the battery's electric qualification.
     * @param string|null $value Value to set for the elecQualificationName property.
    */
    public function setElecQualificationName(?string $value): void {
        $this->elecQualificationName = $value;
    }

    /**
     * Sets the expireDate property value. The expiration date of the battery qualification.
     * @param string|null $value Value to set for the expireDate property.
    */
    public function setExpireDate(?string $value): void {
        $this->expireDate = $value;
    }

    /**
     * Sets the remark property value. A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the remark property.
    */
    public function setRemark(?string $value): void {
        $this->remark = $value;
    }

}
