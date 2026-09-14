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
 * This type specifies the details returned for the specified package.
*/
class GetPackageDetailResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AgentInfoData|null $agentInfoResponse This type defines information about an EU AR agent, such as their address, name, and phone number.
    */
    private ?AgentInfoData $agentInfoResponse = null;
    
    /**
     * @var string|null $consignPreferenceId The unique identifier of the consign address associated with the package.
    */
    private ?string $consignPreferenceId = null;
    
    /**
     * @var string|null $incoterm The incoterm information associated with the package.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
    */
    private ?string $incoterm = null;
    
    /**
     * @var array<ItemResponses>|null $items This array returns information about the eBay line item(s) that are included in the package.
    */
    private ?array $items = null;
    
    /**
     * @var string|null $lastMileTrackingNumber The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
    */
    private ?string $lastMileTrackingNumber = null;
    
    /**
     * @var string|null $packageComment The seller-defined remark to the buyer associated with the package.
    */
    private ?string $packageComment = null;
    
    /**
     * @var float|null $packageHeight The height of the package in centimeters.
    */
    private ?float $packageHeight = null;
    
    /**
     * @var string|null $packageId The unique identifier of the package.
    */
    private ?string $packageId = null;
    
    /**
     * @var float|null $packageLength The length of the package in centimeters.
    */
    private ?float $packageLength = null;
    
    /**
     * @var string|null $packageStatus The current status of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PackageStatusEnum'>eBay API documentation</a>
    */
    private ?string $packageStatus = null;
    
    /**
     * @var float|null $packageWeight The weight of the package in grams.
    */
    private ?float $packageWeight = null;
    
    /**
     * @var float|null $packageWidth The width of the package in centimeters.
    */
    private ?float $packageWidth = null;
    
    /**
     * @var Amount|null $paymentCost This type defines the monetary value of an amount. 
    */
    private ?Amount $paymentCost = null;
    
    /**
     * @var string|null $shipFromAddressId The unique identifier of the ship-from address associated with the package.
    */
    private ?string $shipFromAddressId = null;
    
    /**
     * @var string|null $shippingServiceId The unique identifier of the shipping service used for the package.
    */
    private ?string $shippingServiceId = null;
    
    /**
     * @var ShipToAddressResponsesData|null $shipToAddress This type specifies the ship-to address information for a retrieved package.
    */
    private ?ShipToAddressResponsesData $shipToAddress = null;
    
    /**
     * @var SpecialServiceDetail|null $specialServiceDetail This type defines the special service details available for a package.
    */
    private ?SpecialServiceDetail $specialServiceDetail = null;
    
    /**
     * @var string|null $valueForCarriage The declared value of the package.
    */
    private ?string $valueForCarriage = null;
    
    /**
     * Instantiates a new GetPackageDetailResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPackageDetailResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPackageDetailResponsesData {
        return new GetPackageDetailResponsesData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the agentInfoResponse property value. This type defines information about an EU AR agent, such as their address, name, and phone number.
     * @return AgentInfoData|null
    */
    public function getAgentInfoResponse(): ?AgentInfoData {
        return $this->agentInfoResponse;
    }

    /**
     * Gets the consignPreferenceId property value. The unique identifier of the consign address associated with the package.
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
            'agentInfoResponse' => fn(ParseNode $n) => $o->setAgentInfoResponse($n->getObjectValue([AgentInfoData::class, 'createFromDiscriminatorValue'])),
            'consignPreferenceId' => fn(ParseNode $n) => $o->setConsignPreferenceId($n->getStringValue()),
            'incoterm' => fn(ParseNode $n) => $o->setIncoterm($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([ItemResponses::class, 'createFromDiscriminatorValue'])),
            'lastMileTrackingNumber' => fn(ParseNode $n) => $o->setLastMileTrackingNumber($n->getStringValue()),
            'packageComment' => fn(ParseNode $n) => $o->setPackageComment($n->getStringValue()),
            'packageHeight' => fn(ParseNode $n) => $o->setPackageHeight($n->getFloatValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'packageLength' => fn(ParseNode $n) => $o->setPackageLength($n->getFloatValue()),
            'packageStatus' => fn(ParseNode $n) => $o->setPackageStatus($n->getStringValue()),
            'packageWeight' => fn(ParseNode $n) => $o->setPackageWeight($n->getFloatValue()),
            'packageWidth' => fn(ParseNode $n) => $o->setPackageWidth($n->getFloatValue()),
            'paymentCost' => fn(ParseNode $n) => $o->setPaymentCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shipFromAddressId' => fn(ParseNode $n) => $o->setShipFromAddressId($n->getStringValue()),
            'shippingServiceId' => fn(ParseNode $n) => $o->setShippingServiceId($n->getStringValue()),
            'shipToAddress' => fn(ParseNode $n) => $o->setShipToAddress($n->getObjectValue([ShipToAddressResponsesData::class, 'createFromDiscriminatorValue'])),
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
     * Gets the items property value. This array returns information about the eBay line item(s) that are included in the package.
     * @return array<ItemResponses>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @return string|null
    */
    public function getLastMileTrackingNumber(): ?string {
        return $this->lastMileTrackingNumber;
    }

    /**
     * Gets the packageComment property value. The seller-defined remark to the buyer associated with the package.
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
     * Gets the packageId property value. The unique identifier of the package.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the packageLength property value. The length of the package in centimeters.
     * @return float|null
    */
    public function getPackageLength(): ?float {
        return $this->packageLength;
    }

    /**
     * Gets the packageStatus property value. The current status of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PackageStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPackageStatus(): ?string {
        return $this->packageStatus;
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
     * Gets the paymentCost property value. This type defines the monetary value of an amount. 
     * @return Amount|null
    */
    public function getPaymentCost(): ?Amount {
        return $this->paymentCost;
    }

    /**
     * Gets the shipFromAddressId property value. The unique identifier of the ship-from address associated with the package.
     * @return string|null
    */
    public function getShipFromAddressId(): ?string {
        return $this->shipFromAddressId;
    }

    /**
     * Gets the shippingServiceId property value. The unique identifier of the shipping service used for the package.
     * @return string|null
    */
    public function getShippingServiceId(): ?string {
        return $this->shippingServiceId;
    }

    /**
     * Gets the shipToAddress property value. This type specifies the ship-to address information for a retrieved package.
     * @return ShipToAddressResponsesData|null
    */
    public function getShipToAddress(): ?ShipToAddressResponsesData {
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
     * Gets the valueForCarriage property value. The declared value of the package.
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
        $writer->writeObjectValue('agentInfoResponse', $this->getAgentInfoResponse());
        $writer->writeStringValue('consignPreferenceId', $this->getConsignPreferenceId());
        $writer->writeStringValue('incoterm', $this->getIncoterm());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('lastMileTrackingNumber', $this->getLastMileTrackingNumber());
        $writer->writeStringValue('packageComment', $this->getPackageComment());
        $writer->writeFloatValue('packageHeight', $this->getPackageHeight());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeFloatValue('packageLength', $this->getPackageLength());
        $writer->writeStringValue('packageStatus', $this->getPackageStatus());
        $writer->writeFloatValue('packageWeight', $this->getPackageWeight());
        $writer->writeFloatValue('packageWidth', $this->getPackageWidth());
        $writer->writeObjectValue('paymentCost', $this->getPaymentCost());
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
     * Sets the agentInfoResponse property value. This type defines information about an EU AR agent, such as their address, name, and phone number.
     * @param AgentInfoData|null $value Value to set for the agentInfoResponse property.
    */
    public function setAgentInfoResponse(?AgentInfoData $value): void {
        $this->agentInfoResponse = $value;
    }

    /**
     * Sets the consignPreferenceId property value. The unique identifier of the consign address associated with the package.
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
     * Sets the items property value. This array returns information about the eBay line item(s) that are included in the package.
     * @param array<ItemResponses>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @param string|null $value Value to set for the lastMileTrackingNumber property.
    */
    public function setLastMileTrackingNumber(?string $value): void {
        $this->lastMileTrackingNumber = $value;
    }

    /**
     * Sets the packageComment property value. The seller-defined remark to the buyer associated with the package.
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
     * Sets the packageId property value. The unique identifier of the package.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->packageId = $value;
    }

    /**
     * Sets the packageLength property value. The length of the package in centimeters.
     * @param float|null $value Value to set for the packageLength property.
    */
    public function setPackageLength(?float $value): void {
        $this->packageLength = $value;
    }

    /**
     * Sets the packageStatus property value. The current status of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:PackageStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the packageStatus property.
    */
    public function setPackageStatus(?string $value): void {
        $this->packageStatus = $value;
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
     * Sets the paymentCost property value. This type defines the monetary value of an amount. 
     * @param Amount|null $value Value to set for the paymentCost property.
    */
    public function setPaymentCost(?Amount $value): void {
        $this->paymentCost = $value;
    }

    /**
     * Sets the shipFromAddressId property value. The unique identifier of the ship-from address associated with the package.
     * @param string|null $value Value to set for the shipFromAddressId property.
    */
    public function setShipFromAddressId(?string $value): void {
        $this->shipFromAddressId = $value;
    }

    /**
     * Sets the shippingServiceId property value. The unique identifier of the shipping service used for the package.
     * @param string|null $value Value to set for the shippingServiceId property.
    */
    public function setShippingServiceId(?string $value): void {
        $this->shippingServiceId = $value;
    }

    /**
     * Sets the shipToAddress property value. This type specifies the ship-to address information for a retrieved package.
     * @param ShipToAddressResponsesData|null $value Value to set for the shipToAddress property.
    */
    public function setShipToAddress(?ShipToAddressResponsesData $value): void {
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
     * Sets the valueForCarriage property value. The declared value of the package.
     * @param string|null $value Value to set for the valueForCarriage property.
    */
    public function setValueForCarriage(?string $value): void {
        $this->valueForCarriage = $value;
    }

}
