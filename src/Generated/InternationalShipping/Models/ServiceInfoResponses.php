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
 * This type specifies the shipping service information.
*/
class ServiceInfoResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $descriptionEn Basic shipping service information in English.
    */
    private ?string $descriptionEn = null;
    
    /**
     * @var string|null $descriptionHk Basic shipping service information in traditional Chinese.
    */
    private ?string $descriptionHk = null;
    
    /**
     * @var string|null $descriptionJp Basic shipping service information in Japanese.
    */
    private ?string $descriptionJp = null;
    
    /**
     * @var string|null $descriptionZh Basic shipping service information in simplified Chinese.
    */
    private ?string $descriptionZh = null;
    
    /**
     * @var array<DirectionsResponses>|null $directions This array lists includes all Ship From/Ship To combinations that the service supports. It also includes the type of batteries that may be shipping using the shipping service.
    */
    private ?array $directions = null;
    
    /**
     * @var string|null $incoterm The incoterm information associated with the the shipping service.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
    */
    private ?string $incoterm = null;
    
    /**
     * @var float|null $maxLength This value indicates the maximum length (in centimeters) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?float $maxLength = null;
    
    /**
     * @var float|null $maxTotalLength This value indicates the total maximum value of the length, width, and height of the package.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?float $maxTotalLength = null;
    
    /**
     * @var float|null $maxWeight This value indicates the maximum weight (in grams) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?float $maxWeight = null;
    
    /**
     * @var string|null $nameEn The shipping service name in English
    */
    private ?string $nameEn = null;
    
    /**
     * @var string|null $nameHk The shipping service name in traditional Chinese
    */
    private ?string $nameHk = null;
    
    /**
     * @var string|null $nameJp The shipping service name in Japanese.
    */
    private ?string $nameJp = null;
    
    /**
     * @var string|null $nameZh The shipping service name in simplified Chinese
    */
    private ?string $nameZh = null;
    
    /**
     * @var string|null $shippingServiceId The unique identifier of the shipping service being retrieved.<br><br>This value can be input in the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage#request.packageInfo.shippingServiceId" target="_blank">shippingServiceId</a> field when creating a package through the the <b>createPackage</b> method.
    */
    private ?string $shippingServiceId = null;
    
    /**
     * Instantiates a new ServiceInfoResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceInfoResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceInfoResponses {
        return new ServiceInfoResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the descriptionEn property value. Basic shipping service information in English.
     * @return string|null
    */
    public function getDescriptionEn(): ?string {
        return $this->descriptionEn;
    }

    /**
     * Gets the descriptionHk property value. Basic shipping service information in traditional Chinese.
     * @return string|null
    */
    public function getDescriptionHk(): ?string {
        return $this->descriptionHk;
    }

    /**
     * Gets the descriptionJp property value. Basic shipping service information in Japanese.
     * @return string|null
    */
    public function getDescriptionJp(): ?string {
        return $this->descriptionJp;
    }

    /**
     * Gets the descriptionZh property value. Basic shipping service information in simplified Chinese.
     * @return string|null
    */
    public function getDescriptionZh(): ?string {
        return $this->descriptionZh;
    }

    /**
     * Gets the directions property value. This array lists includes all Ship From/Ship To combinations that the service supports. It also includes the type of batteries that may be shipping using the shipping service.
     * @return array<DirectionsResponses>|null
    */
    public function getDirections(): ?array {
        return $this->directions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'descriptionEn' => fn(ParseNode $n) => $o->setDescriptionEn($n->getStringValue()),
            'descriptionHk' => fn(ParseNode $n) => $o->setDescriptionHk($n->getStringValue()),
            'descriptionJp' => fn(ParseNode $n) => $o->setDescriptionJp($n->getStringValue()),
            'descriptionZh' => fn(ParseNode $n) => $o->setDescriptionZh($n->getStringValue()),
            'directions' => fn(ParseNode $n) => $o->setDirections($n->getCollectionOfObjectValues([DirectionsResponses::class, 'createFromDiscriminatorValue'])),
            'incoterm' => fn(ParseNode $n) => $o->setIncoterm($n->getStringValue()),
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getFloatValue()),
            'maxTotalLength' => fn(ParseNode $n) => $o->setMaxTotalLength($n->getFloatValue()),
            'maxWeight' => fn(ParseNode $n) => $o->setMaxWeight($n->getFloatValue()),
            'nameEn' => fn(ParseNode $n) => $o->setNameEn($n->getStringValue()),
            'nameHk' => fn(ParseNode $n) => $o->setNameHk($n->getStringValue()),
            'nameJp' => fn(ParseNode $n) => $o->setNameJp($n->getStringValue()),
            'nameZh' => fn(ParseNode $n) => $o->setNameZh($n->getStringValue()),
            'shippingServiceId' => fn(ParseNode $n) => $o->setShippingServiceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the incoterm property value. The incoterm information associated with the the shipping service.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getIncoterm(): ?string {
        return $this->incoterm;
    }

    /**
     * Gets the maxLength property value. This value indicates the maximum length (in centimeters) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return float|null
    */
    public function getMaxLength(): ?float {
        return $this->maxLength;
    }

    /**
     * Gets the maxTotalLength property value. This value indicates the total maximum value of the length, width, and height of the package.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return float|null
    */
    public function getMaxTotalLength(): ?float {
        return $this->maxTotalLength;
    }

    /**
     * Gets the maxWeight property value. This value indicates the maximum weight (in grams) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return float|null
    */
    public function getMaxWeight(): ?float {
        return $this->maxWeight;
    }

    /**
     * Gets the nameEn property value. The shipping service name in English
     * @return string|null
    */
    public function getNameEn(): ?string {
        return $this->nameEn;
    }

    /**
     * Gets the nameHk property value. The shipping service name in traditional Chinese
     * @return string|null
    */
    public function getNameHk(): ?string {
        return $this->nameHk;
    }

    /**
     * Gets the nameJp property value. The shipping service name in Japanese.
     * @return string|null
    */
    public function getNameJp(): ?string {
        return $this->nameJp;
    }

    /**
     * Gets the nameZh property value. The shipping service name in simplified Chinese
     * @return string|null
    */
    public function getNameZh(): ?string {
        return $this->nameZh;
    }

    /**
     * Gets the shippingServiceId property value. The unique identifier of the shipping service being retrieved.<br><br>This value can be input in the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage#request.packageInfo.shippingServiceId" target="_blank">shippingServiceId</a> field when creating a package through the the <b>createPackage</b> method.
     * @return string|null
    */
    public function getShippingServiceId(): ?string {
        return $this->shippingServiceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('descriptionEn', $this->getDescriptionEn());
        $writer->writeStringValue('descriptionHk', $this->getDescriptionHk());
        $writer->writeStringValue('descriptionJp', $this->getDescriptionJp());
        $writer->writeStringValue('descriptionZh', $this->getDescriptionZh());
        $writer->writeCollectionOfObjectValues('directions', $this->getDirections());
        $writer->writeStringValue('incoterm', $this->getIncoterm());
        $writer->writeFloatValue('maxLength', $this->getMaxLength());
        $writer->writeFloatValue('maxTotalLength', $this->getMaxTotalLength());
        $writer->writeFloatValue('maxWeight', $this->getMaxWeight());
        $writer->writeStringValue('nameEn', $this->getNameEn());
        $writer->writeStringValue('nameHk', $this->getNameHk());
        $writer->writeStringValue('nameJp', $this->getNameJp());
        $writer->writeStringValue('nameZh', $this->getNameZh());
        $writer->writeStringValue('shippingServiceId', $this->getShippingServiceId());
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
     * Sets the descriptionEn property value. Basic shipping service information in English.
     * @param string|null $value Value to set for the descriptionEn property.
    */
    public function setDescriptionEn(?string $value): void {
        $this->descriptionEn = $value;
    }

    /**
     * Sets the descriptionHk property value. Basic shipping service information in traditional Chinese.
     * @param string|null $value Value to set for the descriptionHk property.
    */
    public function setDescriptionHk(?string $value): void {
        $this->descriptionHk = $value;
    }

    /**
     * Sets the descriptionJp property value. Basic shipping service information in Japanese.
     * @param string|null $value Value to set for the descriptionJp property.
    */
    public function setDescriptionJp(?string $value): void {
        $this->descriptionJp = $value;
    }

    /**
     * Sets the descriptionZh property value. Basic shipping service information in simplified Chinese.
     * @param string|null $value Value to set for the descriptionZh property.
    */
    public function setDescriptionZh(?string $value): void {
        $this->descriptionZh = $value;
    }

    /**
     * Sets the directions property value. This array lists includes all Ship From/Ship To combinations that the service supports. It also includes the type of batteries that may be shipping using the shipping service.
     * @param array<DirectionsResponses>|null $value Value to set for the directions property.
    */
    public function setDirections(?array $value): void {
        $this->directions = $value;
    }

    /**
     * Sets the incoterm property value. The incoterm information associated with the the shipping service.<br><br><b>Supported values</b>:<ul><li><code>DDP</code></li><li><code>DDU</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:IncotermEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the incoterm property.
    */
    public function setIncoterm(?string $value): void {
        $this->incoterm = $value;
    }

    /**
     * Sets the maxLength property value. This value indicates the maximum length (in centimeters) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param float|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?float $value): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the maxTotalLength property value. This value indicates the total maximum value of the length, width, and height of the package.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param float|null $value Value to set for the maxTotalLength property.
    */
    public function setMaxTotalLength(?float $value): void {
        $this->maxTotalLength = $value;
    }

    /**
     * Sets the maxWeight property value. This value indicates the maximum weight (in grams) of the shipping package that the shipping service allows.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param float|null $value Value to set for the maxWeight property.
    */
    public function setMaxWeight(?float $value): void {
        $this->maxWeight = $value;
    }

    /**
     * Sets the nameEn property value. The shipping service name in English
     * @param string|null $value Value to set for the nameEn property.
    */
    public function setNameEn(?string $value): void {
        $this->nameEn = $value;
    }

    /**
     * Sets the nameHk property value. The shipping service name in traditional Chinese
     * @param string|null $value Value to set for the nameHk property.
    */
    public function setNameHk(?string $value): void {
        $this->nameHk = $value;
    }

    /**
     * Sets the nameJp property value. The shipping service name in Japanese.
     * @param string|null $value Value to set for the nameJp property.
    */
    public function setNameJp(?string $value): void {
        $this->nameJp = $value;
    }

    /**
     * Sets the nameZh property value. The shipping service name in simplified Chinese
     * @param string|null $value Value to set for the nameZh property.
    */
    public function setNameZh(?string $value): void {
        $this->nameZh = $value;
    }

    /**
     * Sets the shippingServiceId property value. The unique identifier of the shipping service being retrieved.<br><br>This value can be input in the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage#request.packageInfo.shippingServiceId" target="_blank">shippingServiceId</a> field when creating a package through the the <b>createPackage</b> method.
     * @param string|null $value Value to set for the shippingServiceId property.
    */
    public function setShippingServiceId(?string $value): void {
        $this->shippingServiceId = $value;
    }

}
