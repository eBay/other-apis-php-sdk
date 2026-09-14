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
 * This container specifies direction information for a shipping service.
*/
class DirectionsResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $batteryType The supported battery type for the shipping service.
    */
    private ?string $batteryType = null;
    
    /**
     * @var string|null $from The two-letter ISO 3166 ship-from country code.
    */
    private ?string $from = null;
    
    /**
     * @var string|null $to The two-letter ISO 3166 destination country code.
    */
    private ?string $to = null;
    
    /**
     * Instantiates a new DirectionsResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectionsResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectionsResponses {
        return new DirectionsResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the batteryType property value. The supported battery type for the shipping service.
     * @return string|null
    */
    public function getBatteryType(): ?string {
        return $this->batteryType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryType' => fn(ParseNode $n) => $o->setBatteryType($n->getStringValue()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getStringValue()),
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
        ];
    }

    /**
     * Gets the from property value. The two-letter ISO 3166 ship-from country code.
     * @return string|null
    */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Gets the to property value. The two-letter ISO 3166 destination country code.
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('batteryType', $this->getBatteryType());
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeStringValue('to', $this->getTo());
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
     * Sets the batteryType property value. The supported battery type for the shipping service.
     * @param string|null $value Value to set for the batteryType property.
    */
    public function setBatteryType(?string $value): void {
        $this->batteryType = $value;
    }

    /**
     * Sets the from property value. The two-letter ISO 3166 ship-from country code.
     * @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value): void {
        $this->from = $value;
    }

    /**
     * Sets the to property value. The two-letter ISO 3166 destination country code.
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

}
