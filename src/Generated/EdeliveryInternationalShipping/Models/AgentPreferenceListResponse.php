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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields that describe a EU AR agents preferences.
*/
class AgentPreferenceListResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $ebayId The eBay ID of the EU AR agent.
    */
    private ?string $ebayId = null;
    
    /**
     * @var string|null $shippingCountry The two-letter ISO 3166 code of the shipping country that an EU AR agent supports.
    */
    private ?string $shippingCountry = null;
    
    /**
     * Instantiates a new AgentPreferenceListResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentPreferenceListResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentPreferenceListResponse {
        return new AgentPreferenceListResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ebayId property value. The eBay ID of the EU AR agent.
     * @return string|null
    */
    public function getEbayId(): ?string {
        return $this->ebayId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ebayId' => fn(ParseNode $n) => $o->setEbayId($n->getStringValue()),
            'shippingCountry' => fn(ParseNode $n) => $o->setShippingCountry($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingCountry property value. The two-letter ISO 3166 code of the shipping country that an EU AR agent supports.
     * @return string|null
    */
    public function getShippingCountry(): ?string {
        return $this->shippingCountry;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ebayId', $this->getEbayId());
        $writer->writeStringValue('shippingCountry', $this->getShippingCountry());
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
     * Sets the ebayId property value. The eBay ID of the EU AR agent.
     * @param string|null $value Value to set for the ebayId property.
    */
    public function setEbayId(?string $value): void {
        $this->ebayId = $value;
    }

    /**
     * Sets the shippingCountry property value. The two-letter ISO 3166 code of the shipping country that an EU AR agent supports.
     * @param string|null $value Value to set for the shippingCountry property.
    */
    public function setShippingCountry(?string $value): void {
        $this->shippingCountry = $value;
    }

}
