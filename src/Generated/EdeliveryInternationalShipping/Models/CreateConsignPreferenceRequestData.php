<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to specify the address details used to create a consign address.
*/
class CreateConsignPreferenceRequestData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $consignPreferenceName The name of the consign address.
    */
    private ?string $consignPreferenceName = null;
    
    /**
     * @var string|null $dropoffSiteId The unique identifier of a drop-off site location. This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/dropoff_sites/methods/getDropoffSites" target="_blank">getDropoffSites</a> method.<br><br>This field is required if the <code>DROPOFF</code> address type is specified.
    */
    private ?string $dropoffSiteId = null;
    
    /**
     * @var PickupAddressRequestData|null $pickupAddress This type defines the field used to create a pickup address.
    */
    private ?PickupAddressRequestData $pickupAddress = null;
    
    /**
     * @var string|null $pickupTime The pickup time that the pickup location supports.<br><br>This field is required if the <code>PICK_UP</code> address type is specified. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
    */
    private ?string $pickupTime = null;
    
    /**
     * @var string|null $type The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></li><li><code>RDC</code></li><li><code>CN_POST_DROP_OFF</code></li><li><code>CN_POST_PICK_UP</code></li><li><code>HK_POST_DROP_OFF</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new CreateConsignPreferenceRequestData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateConsignPreferenceRequestData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateConsignPreferenceRequestData {
        return new CreateConsignPreferenceRequestData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the consignPreferenceName property value. The name of the consign address.
     * @return string|null
    */
    public function getConsignPreferenceName(): ?string {
        return $this->consignPreferenceName;
    }

    /**
     * Gets the dropoffSiteId property value. The unique identifier of a drop-off site location. This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/dropoff_sites/methods/getDropoffSites" target="_blank">getDropoffSites</a> method.<br><br>This field is required if the <code>DROPOFF</code> address type is specified.
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
            'consignPreferenceName' => fn(ParseNode $n) => $o->setConsignPreferenceName($n->getStringValue()),
            'dropoffSiteId' => fn(ParseNode $n) => $o->setDropoffSiteId($n->getStringValue()),
            'pickupAddress' => fn(ParseNode $n) => $o->setPickupAddress($n->getObjectValue([PickupAddressRequestData::class, 'createFromDiscriminatorValue'])),
            'pickupTime' => fn(ParseNode $n) => $o->setPickupTime($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the pickupAddress property value. This type defines the field used to create a pickup address.
     * @return PickupAddressRequestData|null
    */
    public function getPickupAddress(): ?PickupAddressRequestData {
        return $this->pickupAddress;
    }

    /**
     * Gets the pickupTime property value. The pickup time that the pickup location supports.<br><br>This field is required if the <code>PICK_UP</code> address type is specified. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPickupTime(): ?string {
        return $this->pickupTime;
    }

    /**
     * Gets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></li><li><code>RDC</code></li><li><code>CN_POST_DROP_OFF</code></li><li><code>CN_POST_PICK_UP</code></li><li><code>HK_POST_DROP_OFF</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
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
     * Sets the consignPreferenceName property value. The name of the consign address.
     * @param string|null $value Value to set for the consignPreferenceName property.
    */
    public function setConsignPreferenceName(?string $value): void {
        $this->consignPreferenceName = $value;
    }

    /**
     * Sets the dropoffSiteId property value. The unique identifier of a drop-off site location. This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/dropoff_sites/methods/getDropoffSites" target="_blank">getDropoffSites</a> method.<br><br>This field is required if the <code>DROPOFF</code> address type is specified.
     * @param string|null $value Value to set for the dropoffSiteId property.
    */
    public function setDropoffSiteId(?string $value): void {
        $this->dropoffSiteId = $value;
    }

    /**
     * Sets the pickupAddress property value. This type defines the field used to create a pickup address.
     * @param PickupAddressRequestData|null $value Value to set for the pickupAddress property.
    */
    public function setPickupAddress(?PickupAddressRequestData $value): void {
        $this->pickupAddress = $value;
    }

    /**
     * Sets the pickupTime property value. The pickup time that the pickup location supports.<br><br>This field is required if the <code>PICK_UP</code> address type is specified. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PickUpTimeTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the pickupTime property.
    */
    public function setPickupTime(?string $value): void {
        $this->pickupTime = $value;
    }

    /**
     * Sets the type property value. The address type of the consign address.<br><br><b>Valid values</b>:<ul><li><code>PICK_UP</code></li><li><code>DROP_OFF</code></li><li><code>FORWARD_DEPLOYMENT</code></li><li><code>RDC</code></li><li><code>CN_POST_DROP_OFF</code></li><li><code>CN_POST_PICK_UP</code></li><li><code>HK_POST_DROP_OFF</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ConsignTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
