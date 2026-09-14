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
 * This type specifies information about the newly created package, such as its estimated costs, tracking number, and package ID value.
*/
class AddPackageResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $estimateCost The estimated shipping cost of the package.
    */
    private ?Amount $estimateCost = null;
    
    /**
     * @var string|null $lastMileTrackingNumber The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
    */
    private ?string $lastMileTrackingNumber = null;
    
    /**
     * @var string|null $packageId The unique identifier of the created package.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>packageId</b>, as there is no programmatic way to retrieve this value at this time.</span>
    */
    private ?string $packageId = null;
    
    /**
     * @var Amount|null $paymentCost The actual payment cost of the package.
    */
    private ?Amount $paymentCost = null;
    
    /**
     * @var string|null $trackingNumber The tracking number of the created package.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new AddPackageResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddPackageResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddPackageResponsesData {
        return new AddPackageResponsesData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the estimateCost property value. The estimated shipping cost of the package.
     * @return Amount|null
    */
    public function getEstimateCost(): ?Amount {
        return $this->estimateCost;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'estimateCost' => fn(ParseNode $n) => $o->setEstimateCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'lastMileTrackingNumber' => fn(ParseNode $n) => $o->setLastMileTrackingNumber($n->getStringValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'paymentCost' => fn(ParseNode $n) => $o->setPaymentCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @return string|null
    */
    public function getLastMileTrackingNumber(): ?string {
        return $this->lastMileTrackingNumber;
    }

    /**
     * Gets the packageId property value. The unique identifier of the created package.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>packageId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the paymentCost property value. The actual payment cost of the package.
     * @return Amount|null
    */
    public function getPaymentCost(): ?Amount {
        return $this->paymentCost;
    }

    /**
     * Gets the trackingNumber property value. The tracking number of the created package.
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
        $writer->writeObjectValue('estimateCost', $this->getEstimateCost());
        $writer->writeStringValue('lastMileTrackingNumber', $this->getLastMileTrackingNumber());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeObjectValue('paymentCost', $this->getPaymentCost());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
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
     * Sets the estimateCost property value. The estimated shipping cost of the package.
     * @param Amount|null $value Value to set for the estimateCost property.
    */
    public function setEstimateCost(?Amount $value): void {
        $this->estimateCost = $value;
    }

    /**
     * Sets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @param string|null $value Value to set for the lastMileTrackingNumber property.
    */
    public function setLastMileTrackingNumber(?string $value): void {
        $this->lastMileTrackingNumber = $value;
    }

    /**
     * Sets the packageId property value. The unique identifier of the created package.<br><br><span class="tablenote"><b>Note:</b> Sellers should keep track of the returned <b>packageId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->packageId = $value;
    }

    /**
     * Sets the paymentCost property value. The actual payment cost of the package.
     * @param Amount|null $value Value to set for the paymentCost property.
    */
    public function setPaymentCost(?Amount $value): void {
        $this->paymentCost = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number of the created package.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
