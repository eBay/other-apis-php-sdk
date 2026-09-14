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
 * This type defines the actual weight, cost, and additional information of a specified package or packages.
*/
class GetActualCostResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var float|null $actualWeight The actual weight of the package in grams.
    */
    private ?float $actualWeight = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This type defines the monetary value of an amount. 
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $billingTime The time the seller was charged for the actual cost of the package in UTC format.
    */
    private ?string $billingTime = null;
    
    /**
     * @var string|null $chargeMode The two-digit charge mode for the package.<br><br><b>Valid values</b>:<ul><li><code>01</code>: Actual weight</li><li><code>02</code>: Additional dimension weight</li><li><code>03</code>: Charged by lite mode</li></ul>
    */
    private ?string $chargeMode = null;
    
    /**
     * @var float|null $chargeWeight The weight, in grams, charged for when shipping the package.
    */
    private ?float $chargeWeight = null;
    
    /**
     * @var string|null $costType The two-digit cost type of the package. This field indicates any fees associated with the package.<br><br>The following values are the typical cost types returned through this field. If an undocumented cost type is returned, check the logistic provider's website for the latest values:<br><ul><li><code>01</code>: Shipping fee</li><li><code>02</code>: Domestic</li><li><code>03</code>: Return fee</li><li><code>04</code>: Domestic burning fee</li><li><code>05</code>: Custom collected fee</li><li><code>06</code>: Weight gap fee</li><li><code>07</code>: Duplication compensation</li></ul>
    */
    private ?string $costType = null;
    
    /**
     * @var string|null $message A seller-defined message to the buyer regarding the transaction.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $message = null;
    
    /**
     * @var string|null $remark A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $remark = null;
    
    /**
     * @var string|null $resultCode The result code associated with the call.<br><br>For example, a result code of <code>200</code> indicates that the call was a success.
    */
    private ?string $resultCode = null;
    
    /**
     * @var string|null $size The size of the package in centimeters. This value is returned in Length*Width*Height format.
    */
    private ?string $size = null;
    
    /**
     * @var string|null $trackingNumber The tracking number associated with the package.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new GetActualCostResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetActualCostResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetActualCostResponsesData {
        return new GetActualCostResponsesData();
    }

    /**
     * Gets the actualWeight property value. The actual weight of the package in grams.
     * @return float|null
    */
    public function getActualWeight(): ?float {
        return $this->actualWeight;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This type defines the monetary value of an amount. 
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the billingTime property value. The time the seller was charged for the actual cost of the package in UTC format.
     * @return string|null
    */
    public function getBillingTime(): ?string {
        return $this->billingTime;
    }

    /**
     * Gets the chargeMode property value. The two-digit charge mode for the package.<br><br><b>Valid values</b>:<ul><li><code>01</code>: Actual weight</li><li><code>02</code>: Additional dimension weight</li><li><code>03</code>: Charged by lite mode</li></ul>
     * @return string|null
    */
    public function getChargeMode(): ?string {
        return $this->chargeMode;
    }

    /**
     * Gets the chargeWeight property value. The weight, in grams, charged for when shipping the package.
     * @return float|null
    */
    public function getChargeWeight(): ?float {
        return $this->chargeWeight;
    }

    /**
     * Gets the costType property value. The two-digit cost type of the package. This field indicates any fees associated with the package.<br><br>The following values are the typical cost types returned through this field. If an undocumented cost type is returned, check the logistic provider's website for the latest values:<br><ul><li><code>01</code>: Shipping fee</li><li><code>02</code>: Domestic</li><li><code>03</code>: Return fee</li><li><code>04</code>: Domestic burning fee</li><li><code>05</code>: Custom collected fee</li><li><code>06</code>: Weight gap fee</li><li><code>07</code>: Duplication compensation</li></ul>
     * @return string|null
    */
    public function getCostType(): ?string {
        return $this->costType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actualWeight' => fn(ParseNode $n) => $o->setActualWeight($n->getFloatValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'billingTime' => fn(ParseNode $n) => $o->setBillingTime($n->getStringValue()),
            'chargeMode' => fn(ParseNode $n) => $o->setChargeMode($n->getStringValue()),
            'chargeWeight' => fn(ParseNode $n) => $o->setChargeWeight($n->getFloatValue()),
            'costType' => fn(ParseNode $n) => $o->setCostType($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'remark' => fn(ParseNode $n) => $o->setRemark($n->getStringValue()),
            'resultCode' => fn(ParseNode $n) => $o->setResultCode($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. A seller-defined message to the buyer regarding the transaction.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the remark property value. A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getRemark(): ?string {
        return $this->remark;
    }

    /**
     * Gets the resultCode property value. The result code associated with the call.<br><br>For example, a result code of <code>200</code> indicates that the call was a success.
     * @return string|null
    */
    public function getResultCode(): ?string {
        return $this->resultCode;
    }

    /**
     * Gets the size property value. The size of the package in centimeters. This value is returned in Length*Width*Height format.
     * @return string|null
    */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * Gets the trackingNumber property value. The tracking number associated with the package.
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('actualWeight', $this->getActualWeight());
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('billingTime', $this->getBillingTime());
        $writer->writeStringValue('chargeMode', $this->getChargeMode());
        $writer->writeFloatValue('chargeWeight', $this->getChargeWeight());
        $writer->writeStringValue('costType', $this->getCostType());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('remark', $this->getRemark());
        $writer->writeStringValue('resultCode', $this->getResultCode());
        $writer->writeStringValue('size', $this->getSize());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actualWeight property value. The actual weight of the package in grams.
     * @param float|null $value Value to set for the actualWeight property.
    */
    public function setActualWeight(?float $value): void {
        $this->actualWeight = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount property value. This type defines the monetary value of an amount. 
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billingTime property value. The time the seller was charged for the actual cost of the package in UTC format.
     * @param string|null $value Value to set for the billingTime property.
    */
    public function setBillingTime(?string $value): void {
        $this->billingTime = $value;
    }

    /**
     * Sets the chargeMode property value. The two-digit charge mode for the package.<br><br><b>Valid values</b>:<ul><li><code>01</code>: Actual weight</li><li><code>02</code>: Additional dimension weight</li><li><code>03</code>: Charged by lite mode</li></ul>
     * @param string|null $value Value to set for the chargeMode property.
    */
    public function setChargeMode(?string $value): void {
        $this->chargeMode = $value;
    }

    /**
     * Sets the chargeWeight property value. The weight, in grams, charged for when shipping the package.
     * @param float|null $value Value to set for the chargeWeight property.
    */
    public function setChargeWeight(?float $value): void {
        $this->chargeWeight = $value;
    }

    /**
     * Sets the costType property value. The two-digit cost type of the package. This field indicates any fees associated with the package.<br><br>The following values are the typical cost types returned through this field. If an undocumented cost type is returned, check the logistic provider's website for the latest values:<br><ul><li><code>01</code>: Shipping fee</li><li><code>02</code>: Domestic</li><li><code>03</code>: Return fee</li><li><code>04</code>: Domestic burning fee</li><li><code>05</code>: Custom collected fee</li><li><code>06</code>: Weight gap fee</li><li><code>07</code>: Duplication compensation</li></ul>
     * @param string|null $value Value to set for the costType property.
    */
    public function setCostType(?string $value): void {
        $this->costType = $value;
    }

    /**
     * Sets the message property value. A seller-defined message to the buyer regarding the transaction.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the remark property value. A remark to the seller themselves.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the remark property.
    */
    public function setRemark(?string $value): void {
        $this->remark = $value;
    }

    /**
     * Sets the resultCode property value. The result code associated with the call.<br><br>For example, a result code of <code>200</code> indicates that the call was a success.
     * @param string|null $value Value to set for the resultCode property.
    */
    public function setResultCode(?string $value): void {
        $this->resultCode = $value;
    }

    /**
     * Sets the size property value. The size of the package in centimeters. This value is returned in Length*Width*Height format.
     * @param string|null $value Value to set for the size property.
    */
    public function setSize(?string $value): void {
        $this->size = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number associated with the package.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
