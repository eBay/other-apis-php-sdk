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
 * This type is used to specify the package information needed to create a package.
*/
class PackageInfoRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AgentInfoData|null $agentInfoRequest This type defines information about an EU AR agent, such as their address, name, and phone number.
    */
    private ?AgentInfoData $agentInfoRequest = null;
    
    /**
     * @var string|null $consignPreferenceId The unique identifier of the consign address to be associated with the package.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
    */
    private ?string $consignPreferenceId = null;
    
    /**
     * @var string|null $incoterm The incoterm information associated with the package.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
    */
    private ?string $incoterm = null;
    
    /**
     * @var array<ItemRequest>|null $items This array is used to specify applicable information about the eBay line item(s) that will be included in the package.
    */
    private ?array $items = null;
    
    /**
     * @var int|null $maxQuantityLimit This field is used to limit the maximum number of parcels used in a single order. If the order has more than one parcel, revise this value to increase the limit.
    */
    private ?int $maxQuantityLimit = null;
    
    /**
     * @var string|null $packageComment A seller-defined comment about the package.
    */
    private ?string $packageComment = null;
    
    /**
     * @var float|null $packageHeight The height of the package in centimeters.
    */
    private ?float $packageHeight = null;
    
    /**
     * @var float|null $packageLength The length of the package in centimeters.
    */
    private ?float $packageLength = null;
    
    /**
     * @var float|null $packageWeight The weight of the package in grams.
    */
    private ?float $packageWeight = null;
    
    /**
     * @var float|null $packageWidth The width of the package in centimeters.
    */
    private ?float $packageWidth = null;
    
    /**
     * @var string|null $shipFromAddressId The unique identifier of the ship-from address used for the package.<br><br>Use the <a href="/api-docs/sell/edelivery_international_shipping/resources/address_preference/methods/getAddressPreferences" target="_blank">getAddressPreferences</a> method to retrieve valid ship-from <b>addressId</b> values associated with your account.
    */
    private ?string $shipFromAddressId = null;
    
    /**
     * @var string|null $shippingServiceId The unique identifier of the shipping service being used for the package.<br><br>This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/services/methods/getServices" target="_blank">getServices</a> method.
    */
    private ?string $shippingServiceId = null;
    
    /**
     * @var ShipToAddressRequestData|null $shipToAddress This type is used to specify the address fields of the ship-to address location.
    */
    private ?ShipToAddressRequestData $shipToAddress = null;
    
    /**
     * @var SpecialServiceDetail|null $specialServiceDetail This type defines the special service details available for a package.
    */
    private ?SpecialServiceDetail $specialServiceDetail = null;
    
    /**
     * @var string|null $valueForCarriage The declared value of a large carriage (a combination of several orders together).
    */
    private ?string $valueForCarriage = null;
    
    /**
     * Instantiates a new PackageInfoRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PackageInfoRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageInfoRequest {
        return new PackageInfoRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the agentInfoRequest property value. This type defines information about an EU AR agent, such as their address, name, and phone number.
     * @return AgentInfoData|null
    */
    public function getAgentInfoRequest(): ?AgentInfoData {
        return $this->agentInfoRequest;
    }

    /**
     * Gets the consignPreferenceId property value. The unique identifier of the consign address to be associated with the package.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
     * @return string|null
    */
    public function getConsignPreferenceId(): ?string {
        return $this->consignPreferenceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agentInfoRequest' => fn(ParseNode $n) => $o->setAgentInfoRequest($n->getObjectValue([AgentInfoData::class, 'createFromDiscriminatorValue'])),
            'consignPreferenceId' => fn(ParseNode $n) => $o->setConsignPreferenceId($n->getStringValue()),
            'incoterm' => fn(ParseNode $n) => $o->setIncoterm($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([ItemRequest::class, 'createFromDiscriminatorValue'])),
            'maxQuantityLimit' => fn(ParseNode $n) => $o->setMaxQuantityLimit($n->getIntegerValue()),
            'packageComment' => fn(ParseNode $n) => $o->setPackageComment($n->getStringValue()),
            'packageHeight' => fn(ParseNode $n) => $o->setPackageHeight($n->getFloatValue()),
            'packageLength' => fn(ParseNode $n) => $o->setPackageLength($n->getFloatValue()),
            'packageWeight' => fn(ParseNode $n) => $o->setPackageWeight($n->getFloatValue()),
            'packageWidth' => fn(ParseNode $n) => $o->setPackageWidth($n->getFloatValue()),
            'shipFromAddressId' => fn(ParseNode $n) => $o->setShipFromAddressId($n->getStringValue()),
            'shippingServiceId' => fn(ParseNode $n) => $o->setShippingServiceId($n->getStringValue()),
            'shipToAddress' => fn(ParseNode $n) => $o->setShipToAddress($n->getObjectValue([ShipToAddressRequestData::class, 'createFromDiscriminatorValue'])),
            'specialServiceDetail' => fn(ParseNode $n) => $o->setSpecialServiceDetail($n->getObjectValue([SpecialServiceDetail::class, 'createFromDiscriminatorValue'])),
            'valueForCarriage' => fn(ParseNode $n) => $o->setValueForCarriage($n->getStringValue()),
        ];
    }

    /**
     * Gets the incoterm property value. The incoterm information associated with the package.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getIncoterm(): ?string {
        return $this->incoterm;
    }

    /**
     * Gets the items property value. This array is used to specify applicable information about the eBay line item(s) that will be included in the package.
     * @return array<ItemRequest>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the maxQuantityLimit property value. This field is used to limit the maximum number of parcels used in a single order. If the order has more than one parcel, revise this value to increase the limit.
     * @return int|null
    */
    public function getMaxQuantityLimit(): ?int {
        return $this->maxQuantityLimit;
    }

    /**
     * Gets the packageComment property value. A seller-defined comment about the package.
     * @return string|null
    */
    public function getPackageComment(): ?string {
        return $this->packageComment;
    }

    /**
     * Gets the packageHeight property value. The height of the package in centimeters.
     * @return float|null
    */
    public function getPackageHeight(): ?float {
        return $this->packageHeight;
    }

    /**
     * Gets the packageLength property value. The length of the package in centimeters.
     * @return float|null
    */
    public function getPackageLength(): ?float {
        return $this->packageLength;
    }

    /**
     * Gets the packageWeight property value. The weight of the package in grams.
     * @return float|null
    */
    public function getPackageWeight(): ?float {
        return $this->packageWeight;
    }

    /**
     * Gets the packageWidth property value. The width of the package in centimeters.
     * @return float|null
    */
    public function getPackageWidth(): ?float {
        return $this->packageWidth;
    }

    /**
     * Gets the shipFromAddressId property value. The unique identifier of the ship-from address used for the package.<br><br>Use the <a href="/api-docs/sell/edelivery_international_shipping/resources/address_preference/methods/getAddressPreferences" target="_blank">getAddressPreferences</a> method to retrieve valid ship-from <b>addressId</b> values associated with your account.
     * @return string|null
    */
    public function getShipFromAddressId(): ?string {
        return $this->shipFromAddressId;
    }

    /**
     * Gets the shippingServiceId property value. The unique identifier of the shipping service being used for the package.<br><br>This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/services/methods/getServices" target="_blank">getServices</a> method.
     * @return string|null
    */
    public function getShippingServiceId(): ?string {
        return $this->shippingServiceId;
    }

    /**
     * Gets the shipToAddress property value. This type is used to specify the address fields of the ship-to address location.
     * @return ShipToAddressRequestData|null
    */
    public function getShipToAddress(): ?ShipToAddressRequestData {
        return $this->shipToAddress;
    }

    /**
     * Gets the specialServiceDetail property value. This type defines the special service details available for a package.
     * @return SpecialServiceDetail|null
    */
    public function getSpecialServiceDetail(): ?SpecialServiceDetail {
        return $this->specialServiceDetail;
    }

    /**
     * Gets the valueForCarriage property value. The declared value of a large carriage (a combination of several orders together).
     * @return string|null
    */
    public function getValueForCarriage(): ?string {
        return $this->valueForCarriage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('agentInfoRequest', $this->getAgentInfoRequest());
        $writer->writeStringValue('consignPreferenceId', $this->getConsignPreferenceId());
        $writer->writeStringValue('incoterm', $this->getIncoterm());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeIntegerValue('maxQuantityLimit', $this->getMaxQuantityLimit());
        $writer->writeStringValue('packageComment', $this->getPackageComment());
        $writer->writeFloatValue('packageHeight', $this->getPackageHeight());
        $writer->writeFloatValue('packageLength', $this->getPackageLength());
        $writer->writeFloatValue('packageWeight', $this->getPackageWeight());
        $writer->writeFloatValue('packageWidth', $this->getPackageWidth());
        $writer->writeStringValue('shipFromAddressId', $this->getShipFromAddressId());
        $writer->writeStringValue('shippingServiceId', $this->getShippingServiceId());
        $writer->writeObjectValue('shipToAddress', $this->getShipToAddress());
        $writer->writeObjectValue('specialServiceDetail', $this->getSpecialServiceDetail());
        $writer->writeStringValue('valueForCarriage', $this->getValueForCarriage());
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
     * Sets the agentInfoRequest property value. This type defines information about an EU AR agent, such as their address, name, and phone number.
     * @param AgentInfoData|null $value Value to set for the agentInfoRequest property.
    */
    public function setAgentInfoRequest(?AgentInfoData $value): void {
        $this->agentInfoRequest = $value;
    }

    /**
     * Sets the consignPreferenceId property value. The unique identifier of the consign address to be associated with the package.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
     * @param string|null $value Value to set for the consignPreferenceId property.
    */
    public function setConsignPreferenceId(?string $value): void {
        $this->consignPreferenceId = $value;
    }

    /**
     * Sets the incoterm property value. The incoterm information associated with the package.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the incoterm property.
    */
    public function setIncoterm(?string $value): void {
        $this->incoterm = $value;
    }

    /**
     * Sets the items property value. This array is used to specify applicable information about the eBay line item(s) that will be included in the package.
     * @param array<ItemRequest>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the maxQuantityLimit property value. This field is used to limit the maximum number of parcels used in a single order. If the order has more than one parcel, revise this value to increase the limit.
     * @param int|null $value Value to set for the maxQuantityLimit property.
    */
    public function setMaxQuantityLimit(?int $value): void {
        $this->maxQuantityLimit = $value;
    }

    /**
     * Sets the packageComment property value. A seller-defined comment about the package.
     * @param string|null $value Value to set for the packageComment property.
    */
    public function setPackageComment(?string $value): void {
        $this->packageComment = $value;
    }

    /**
     * Sets the packageHeight property value. The height of the package in centimeters.
     * @param float|null $value Value to set for the packageHeight property.
    */
    public function setPackageHeight(?float $value): void {
        $this->packageHeight = $value;
    }

    /**
     * Sets the packageLength property value. The length of the package in centimeters.
     * @param float|null $value Value to set for the packageLength property.
    */
    public function setPackageLength(?float $value): void {
        $this->packageLength = $value;
    }

    /**
     * Sets the packageWeight property value. The weight of the package in grams.
     * @param float|null $value Value to set for the packageWeight property.
    */
    public function setPackageWeight(?float $value): void {
        $this->packageWeight = $value;
    }

    /**
     * Sets the packageWidth property value. The width of the package in centimeters.
     * @param float|null $value Value to set for the packageWidth property.
    */
    public function setPackageWidth(?float $value): void {
        $this->packageWidth = $value;
    }

    /**
     * Sets the shipFromAddressId property value. The unique identifier of the ship-from address used for the package.<br><br>Use the <a href="/api-docs/sell/edelivery_international_shipping/resources/address_preference/methods/getAddressPreferences" target="_blank">getAddressPreferences</a> method to retrieve valid ship-from <b>addressId</b> values associated with your account.
     * @param string|null $value Value to set for the shipFromAddressId property.
    */
    public function setShipFromAddressId(?string $value): void {
        $this->shipFromAddressId = $value;
    }

    /**
     * Sets the shippingServiceId property value. The unique identifier of the shipping service being used for the package.<br><br>This value can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/services/methods/getServices" target="_blank">getServices</a> method.
     * @param string|null $value Value to set for the shippingServiceId property.
    */
    public function setShippingServiceId(?string $value): void {
        $this->shippingServiceId = $value;
    }

    /**
     * Sets the shipToAddress property value. This type is used to specify the address fields of the ship-to address location.
     * @param ShipToAddressRequestData|null $value Value to set for the shipToAddress property.
    */
    public function setShipToAddress(?ShipToAddressRequestData $value): void {
        $this->shipToAddress = $value;
    }

    /**
     * Sets the specialServiceDetail property value. This type defines the special service details available for a package.
     * @param SpecialServiceDetail|null $value Value to set for the specialServiceDetail property.
    */
    public function setSpecialServiceDetail(?SpecialServiceDetail $value): void {
        $this->specialServiceDetail = $value;
    }

    /**
     * Sets the valueForCarriage property value. The declared value of a large carriage (a combination of several orders together).
     * @param string|null $value Value to set for the valueForCarriage property.
    */
    public function setValueForCarriage(?string $value): void {
        $this->valueForCarriage = $value;
    }

}
