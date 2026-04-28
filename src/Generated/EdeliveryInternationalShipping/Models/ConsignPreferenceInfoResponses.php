<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

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
     * @var PickupAddressResponsesData|null $pickupAddress This type defines the fields used to specify location and contact information for a pickup-from consign address associated with a seller's eDIS account.
    */
    private ?PickupAddressResponsesData $pickupAddress = null;
    
    /**
     * @var string|null $pickupTime The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
    */
    private ?string $pickupTime = null;
    
    /**
     * @var string|null $type The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
    */
    private ?string $type = null;
    
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
            'pickupTime' => fn(ParseNode $n) => $o->setPickupTime($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the pickupAddress property value. This type defines the fields used to specify location and contact information for a pickup-from consign address associated with a seller's eDIS account.
     * @return PickupAddressResponsesData|null
    */
    public function getPickupAddress(): ?PickupAddressResponsesData {
        return $this->pickupAddress;
    }

    /**
     * Gets the pickupTime property value. The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPickupTime(): ?string {
        return $this->pickupTime;
    }

    /**
     * Gets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getType(): ?string {
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
        $writer->writeStringValue('pickupTime', $this->getPickupTime());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the pickupAddress property value. This type defines the fields used to specify location and contact information for a pickup-from consign address associated with a seller's eDIS account.
     * @param PickupAddressResponsesData|null $value Value to set for the pickupAddress property.
    */
    public function setPickupAddress(?PickupAddressResponsesData $value): void {
        $this->pickupAddress = $value;
    }

    /**
     * Sets the pickupTime property value. The supported pickup window that the pickup location supports.<br><br>This field is only returned if the consign address is a pickup-from location For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the pickupTime property.
    */
    public function setPickupTime(?string $value): void {
        $this->pickupTime = $value;
    }

    /**
     * Sets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
