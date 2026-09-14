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
 * This type defines the fields that describe an EU AR agent.
*/
class AgentModelResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $agentAddress The address of the EU AR agent.
    */
    private ?string $agentAddress = null;
    
    /**
     * @var string|null $agentName The name of the EU AR agent.
    */
    private ?string $agentName = null;
    
    /**
     * @var string|null $agentPhone The phone number of the EU AR agent.
    */
    private ?string $agentPhone = null;
    
    /**
     * @var array<AgentPreferenceListResponse>|null $agentPreferences This array returns the supported shipping countries and eBay user IDs associated with the EU AR agent.
    */
    private ?array $agentPreferences = null;
    
    /**
     * @var string|null $arName The seller-defined setting name of the AR agent.
    */
    private ?string $arName = null;
    
    /**
     * Instantiates a new AgentModelResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentModelResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentModelResponses {
        return new AgentModelResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the agentAddress property value. The address of the EU AR agent.
     * @return string|null
    */
    public function getAgentAddress(): ?string {
        return $this->agentAddress;
    }

    /**
     * Gets the agentName property value. The name of the EU AR agent.
     * @return string|null
    */
    public function getAgentName(): ?string {
        return $this->agentName;
    }

    /**
     * Gets the agentPhone property value. The phone number of the EU AR agent.
     * @return string|null
    */
    public function getAgentPhone(): ?string {
        return $this->agentPhone;
    }

    /**
     * Gets the agentPreferences property value. This array returns the supported shipping countries and eBay user IDs associated with the EU AR agent.
     * @return array<AgentPreferenceListResponse>|null
    */
    public function getAgentPreferences(): ?array {
        return $this->agentPreferences;
    }

    /**
     * Gets the arName property value. The seller-defined setting name of the AR agent.
     * @return string|null
    */
    public function getArName(): ?string {
        return $this->arName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agentAddress' => fn(ParseNode $n) => $o->setAgentAddress($n->getStringValue()),
            'agentName' => fn(ParseNode $n) => $o->setAgentName($n->getStringValue()),
            'agentPhone' => fn(ParseNode $n) => $o->setAgentPhone($n->getStringValue()),
            'agentPreferences' => fn(ParseNode $n) => $o->setAgentPreferences($n->getCollectionOfObjectValues([AgentPreferenceListResponse::class, 'createFromDiscriminatorValue'])),
            'arName' => fn(ParseNode $n) => $o->setArName($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('agentAddress', $this->getAgentAddress());
        $writer->writeStringValue('agentName', $this->getAgentName());
        $writer->writeStringValue('agentPhone', $this->getAgentPhone());
        $writer->writeCollectionOfObjectValues('agentPreferences', $this->getAgentPreferences());
        $writer->writeStringValue('arName', $this->getArName());
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
     * Sets the agentAddress property value. The address of the EU AR agent.
     * @param string|null $value Value to set for the agentAddress property.
    */
    public function setAgentAddress(?string $value): void {
        $this->agentAddress = $value;
    }

    /**
     * Sets the agentName property value. The name of the EU AR agent.
     * @param string|null $value Value to set for the agentName property.
    */
    public function setAgentName(?string $value): void {
        $this->agentName = $value;
    }

    /**
     * Sets the agentPhone property value. The phone number of the EU AR agent.
     * @param string|null $value Value to set for the agentPhone property.
    */
    public function setAgentPhone(?string $value): void {
        $this->agentPhone = $value;
    }

    /**
     * Sets the agentPreferences property value. This array returns the supported shipping countries and eBay user IDs associated with the EU AR agent.
     * @param array<AgentPreferenceListResponse>|null $value Value to set for the agentPreferences property.
    */
    public function setAgentPreferences(?array $value): void {
        $this->agentPreferences = $value;
    }

    /**
     * Sets the arName property value. The seller-defined setting name of the AR agent.
     * @param string|null $value Value to set for the arName property.
    */
    public function setArName(?string $value): void {
        $this->arName = $value;
    }

}
