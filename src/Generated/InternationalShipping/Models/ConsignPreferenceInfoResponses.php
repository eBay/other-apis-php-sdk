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
 * This type specifies the fields used to create a consign address.
*/
class ConsignPreferenceInfoResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $consignPreferenceId The unique identifier of the consign address.
    */
    private ?string $consignPreferenceId = null;
    
    /**
     * @var string|null $consignPreferenceName The name of the consign address.
    */
    private ?string $consignPreferenceName = null;
    
    /**
     * @var string|null $dropoffSiteId The unique identifier of the drop-off site.<br><br>This field is only returned if the consign address is a drop-off location.
    */
    private ?string $dropoffSiteId = null;
    
    /**
     * @var PickupAddressResponsesData|null $pickupAddress This container returns the address and contact information for a pickup address.<br><br><span class="tablenote"><b>Note:</b> This container is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?PickupAddressResponsesData $pickupAddress = null;
    
    /**
     * @var PickUpTimeTypeEnum|null $pickupTime The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location
    */
    private ?PickUpTimeTypeEnum $pickupTime = null;
    
    /**
     * @var ConsignTypeEnum|null $type The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul>
    */
    private ?ConsignTypeEnum $type = null;
    
    /**
     * Instantiates a new ConsignPreferenceInfoResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConsignPreferenceInfoResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConsignPreferenceInfoResponses {
        return new ConsignPreferenceInfoResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the consignPreferenceId property value. The unique identifier of the consign address.
     * @return string|null
    */
    public function getConsignPreferenceId(): ?string {
        return $this->consignPreferenceId;
    }

    /**
     * Gets the consignPreferenceName property value. The name of the consign address.
     * @return string|null
    */
    public function getConsignPreferenceName(): ?string {
        return $this->consignPreferenceName;
    }

    /**
     * Gets the dropoffSiteId property value. The unique identifier of the drop-off site.<br><br>This field is only returned if the consign address is a drop-off location.
     * @return string|null
    */
    public function getDropoffSiteId(): ?string {
        return $this->dropoffSiteId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consignPreferenceId' => fn(ParseNode $n) => $o->setConsignPreferenceId($n->getStringValue()),
            'consignPreferenceName' => fn(ParseNode $n) => $o->setConsignPreferenceName($n->getStringValue()),
            'dropoffSiteId' => fn(ParseNode $n) => $o->setDropoffSiteId($n->getStringValue()),
            'pickupAddress' => fn(ParseNode $n) => $o->setPickupAddress($n->getObjectValue([PickupAddressResponsesData::class, 'createFromDiscriminatorValue'])),
            'pickupTime' => fn(ParseNode $n) => $o->setPickupTime($n->getEnumValue(PickUpTimeTypeEnum::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(ConsignTypeEnum::class)),
        ];
    }

    /**
     * Gets the pickupAddress property value. This container returns the address and contact information for a pickup address.<br><br><span class="tablenote"><b>Note:</b> This container is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return PickupAddressResponsesData|null
    */
    public function getPickupAddress(): ?PickupAddressResponsesData {
        return $this->pickupAddress;
    }

    /**
     * Gets the pickupTime property value. The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location
     * @return PickUpTimeTypeEnum|null
    */
    public function getPickupTime(): ?PickUpTimeTypeEnum {
        return $this->pickupTime;
    }

    /**
     * Gets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul>
     * @return ConsignTypeEnum|null
    */
    public function getType(): ?ConsignTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('consignPreferenceId', $this->getConsignPreferenceId());
        $writer->writeStringValue('consignPreferenceName', $this->getConsignPreferenceName());
        $writer->writeStringValue('dropoffSiteId', $this->getDropoffSiteId());
        $writer->writeObjectValue('pickupAddress', $this->getPickupAddress());
        $writer->writeEnumValue('pickupTime', $this->getPickupTime());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the consignPreferenceId property value. The unique identifier of the consign address.
     * @param string|null $value Value to set for the consignPreferenceId property.
    */
    public function setConsignPreferenceId(?string $value): void {
        $this->consignPreferenceId = $value;
    }

    /**
     * Sets the consignPreferenceName property value. The name of the consign address.
     * @param string|null $value Value to set for the consignPreferenceName property.
    */
    public function setConsignPreferenceName(?string $value): void {
        $this->consignPreferenceName = $value;
    }

    /**
     * Sets the dropoffSiteId property value. The unique identifier of the drop-off site.<br><br>This field is only returned if the consign address is a drop-off location.
     * @param string|null $value Value to set for the dropoffSiteId property.
    */
    public function setDropoffSiteId(?string $value): void {
        $this->dropoffSiteId = $value;
    }

    /**
     * Sets the pickupAddress property value. This container returns the address and contact information for a pickup address.<br><br><span class="tablenote"><b>Note:</b> This container is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param PickupAddressResponsesData|null $value Value to set for the pickupAddress property.
    */
    public function setPickupAddress(?PickupAddressResponsesData $value): void {
        $this->pickupAddress = $value;
    }

    /**
     * Sets the pickupTime property value. The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location
     * @param PickUpTimeTypeEnum|null $value Value to set for the pickupTime property.
    */
    public function setPickupTime(?PickUpTimeTypeEnum $value): void {
        $this->pickupTime = $value;
    }

    /**
     * Sets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul>
     * @param ConsignTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?ConsignTypeEnum $value): void {
        $this->type = $value;
    }

}
