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
 * This type specifies information relating to the SKU item in a package.
*/
class SkuRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cpscProfileId The unique identifier of a CPSC profile.
    */
    private ?string $cpscProfileId = null;
    
    /**
     * @var string|null $elecQualificationId The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.<br><br>This value is returned in the <a href="/develop/api/sell/edelivery_international_shipping_api#sell-edelivery_international_shipping_api-battery_qualifications-getbatteryqualifications">getBatteryQualifications</a> method.
    */
    private ?string $elecQualificationId = null;
    
    /**
     * @var ExemptionTypeEnum|null $exemptionType The exemption type associated with the CPSC profile.
    */
    private ?ExemptionTypeEnum $exemptionType = null;
    
    /**
     * @var array<FDCSkuRequest>|null $fdcSkus This array lists the FDC SKUs associated with the item. An FDC SKU is the SKU label in a forward deployment center.<div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Please contact customer service before using these fields.</p></div>
    */
    private ?array $fdcSkus = null;
    
    /**
     * @var float|null $height The height of the item in centimeters.
    */
    private ?float $height = null;
    
    /**
     * @var bool|null $isLiBattery This boolean indicates if the item contains a battery.
    */
    private ?bool $isLiBattery = null;
    
    /**
     * @var float|null $length The length of the item in centimeters.
    */
    private ?float $length = null;
    
    /**
     * @var LiBatteryTypeEnum|null $liBatteryType If the item contains a battery, this field indicates the type of battery the item contains.
    */
    private ?LiBatteryTypeEnum $liBatteryType = null;
    
    /**
     * @var string|null $nameEn The English name of the item.
    */
    private ?string $nameEn = null;
    
    /**
     * @var string|null $nameZh The Chinese name of the item.
    */
    private ?string $nameZh = null;
    
    /**
     * @var string|null $origin The country of origin of the item.
    */
    private ?string $origin = null;
    
    /**
     * @var Amount|null $price The declared price of the item.
    */
    private ?Amount $price = null;
    
    /**
     * @var string|null $remark A remark to the seller themselves.
    */
    private ?string $remark = null;
    
    /**
     * @var string|null $skuNumber The stock keeping unit (SKU) identifier of the item.
    */
    private ?string $skuNumber = null;
    
    /**
     * @var string|null $tariffCode The Harmonized System code for custom declaration. This value declares the category of the item..
    */
    private ?string $tariffCode = null;
    
    /**
     * @var float|null $weight The weight of the item in grams.
    */
    private ?float $weight = null;
    
    /**
     * @var float|null $width The width of the item in centimeters.
    */
    private ?float $width = null;
    
    /**
     * Instantiates a new SkuRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SkuRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SkuRequest {
        return new SkuRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cpscProfileId property value. The unique identifier of a CPSC profile.
     * @return string|null
    */
    public function getCpscProfileId(): ?string {
        return $this->cpscProfileId;
    }

    /**
     * Gets the elecQualificationId property value. The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.<br><br>This value is returned in the <a href="/develop/api/sell/edelivery_international_shipping_api#sell-edelivery_international_shipping_api-battery_qualifications-getbatteryqualifications">getBatteryQualifications</a> method.
     * @return string|null
    */
    public function getElecQualificationId(): ?string {
        return $this->elecQualificationId;
    }

    /**
     * Gets the exemptionType property value. The exemption type associated with the CPSC profile.
     * @return ExemptionTypeEnum|null
    */
    public function getExemptionType(): ?ExemptionTypeEnum {
        return $this->exemptionType;
    }

    /**
     * Gets the fdcSkus property value. This array lists the FDC SKUs associated with the item. An FDC SKU is the SKU label in a forward deployment center.<div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Please contact customer service before using these fields.</p></div>
     * @return array<FDCSkuRequest>|null
    */
    public function getFdcSkus(): ?array {
        return $this->fdcSkus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cpscProfileId' => fn(ParseNode $n) => $o->setCpscProfileId($n->getStringValue()),
            'elecQualificationId' => fn(ParseNode $n) => $o->setElecQualificationId($n->getStringValue()),
            'exemptionType' => fn(ParseNode $n) => $o->setExemptionType($n->getEnumValue(ExemptionTypeEnum::class)),
            'fdcSkus' => fn(ParseNode $n) => $o->setFdcSkus($n->getCollectionOfObjectValues([FDCSkuRequest::class, 'createFromDiscriminatorValue'])),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getFloatValue()),
            'isLiBattery' => fn(ParseNode $n) => $o->setIsLiBattery($n->getBooleanValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getFloatValue()),
            'liBatteryType' => fn(ParseNode $n) => $o->setLiBatteryType($n->getEnumValue(LiBatteryTypeEnum::class)),
            'nameEn' => fn(ParseNode $n) => $o->setNameEn($n->getStringValue()),
            'nameZh' => fn(ParseNode $n) => $o->setNameZh($n->getStringValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'remark' => fn(ParseNode $n) => $o->setRemark($n->getStringValue()),
            'skuNumber' => fn(ParseNode $n) => $o->setSkuNumber($n->getStringValue()),
            'tariffCode' => fn(ParseNode $n) => $o->setTariffCode($n->getStringValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getFloatValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getFloatValue()),
        ];
    }

    /**
     * Gets the height property value. The height of the item in centimeters.
     * @return float|null
    */
    public function getHeight(): ?float {
        return $this->height;
    }

    /**
     * Gets the isLiBattery property value. This boolean indicates if the item contains a battery.
     * @return bool|null
    */
    public function getIsLiBattery(): ?bool {
        return $this->isLiBattery;
    }

    /**
     * Gets the length property value. The length of the item in centimeters.
     * @return float|null
    */
    public function getLength(): ?float {
        return $this->length;
    }

    /**
     * Gets the liBatteryType property value. If the item contains a battery, this field indicates the type of battery the item contains.
     * @return LiBatteryTypeEnum|null
    */
    public function getLiBatteryType(): ?LiBatteryTypeEnum {
        return $this->liBatteryType;
    }

    /**
     * Gets the nameEn property value. The English name of the item.
     * @return string|null
    */
    public function getNameEn(): ?string {
        return $this->nameEn;
    }

    /**
     * Gets the nameZh property value. The Chinese name of the item.
     * @return string|null
    */
    public function getNameZh(): ?string {
        return $this->nameZh;
    }

    /**
     * Gets the origin property value. The country of origin of the item.
     * @return string|null
    */
    public function getOrigin(): ?string {
        return $this->origin;
    }

    /**
     * Gets the price property value. The declared price of the item.
     * @return Amount|null
    */
    public function getPrice(): ?Amount {
        return $this->price;
    }

    /**
     * Gets the remark property value. A remark to the seller themselves.
     * @return string|null
    */
    public function getRemark(): ?string {
        return $this->remark;
    }

    /**
     * Gets the skuNumber property value. The stock keeping unit (SKU) identifier of the item.
     * @return string|null
    */
    public function getSkuNumber(): ?string {
        return $this->skuNumber;
    }

    /**
     * Gets the tariffCode property value. The Harmonized System code for custom declaration. This value declares the category of the item..
     * @return string|null
    */
    public function getTariffCode(): ?string {
        return $this->tariffCode;
    }

    /**
     * Gets the weight property value. The weight of the item in grams.
     * @return float|null
    */
    public function getWeight(): ?float {
        return $this->weight;
    }

    /**
     * Gets the width property value. The width of the item in centimeters.
     * @return float|null
    */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cpscProfileId', $this->getCpscProfileId());
        $writer->writeStringValue('elecQualificationId', $this->getElecQualificationId());
        $writer->writeEnumValue('exemptionType', $this->getExemptionType());
        $writer->writeCollectionOfObjectValues('fdcSkus', $this->getFdcSkus());
        $writer->writeFloatValue('height', $this->getHeight());
        $writer->writeBooleanValue('isLiBattery', $this->getIsLiBattery());
        $writer->writeFloatValue('length', $this->getLength());
        $writer->writeEnumValue('liBatteryType', $this->getLiBatteryType());
        $writer->writeStringValue('nameEn', $this->getNameEn());
        $writer->writeStringValue('nameZh', $this->getNameZh());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeObjectValue('price', $this->getPrice());
        $writer->writeStringValue('remark', $this->getRemark());
        $writer->writeStringValue('skuNumber', $this->getSkuNumber());
        $writer->writeStringValue('tariffCode', $this->getTariffCode());
        $writer->writeFloatValue('weight', $this->getWeight());
        $writer->writeFloatValue('width', $this->getWidth());
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
     * Sets the cpscProfileId property value. The unique identifier of a CPSC profile.
     * @param string|null $value Value to set for the cpscProfileId property.
    */
    public function setCpscProfileId(?string $value): void {
        $this->cpscProfileId = $value;
    }

    /**
     * Sets the elecQualificationId property value. The unique identifier of the battery's electric qualification, which indicates that the battery has a certificate of approval for global shipping.<br><br>This value is returned in the <a href="/develop/api/sell/edelivery_international_shipping_api#sell-edelivery_international_shipping_api-battery_qualifications-getbatteryqualifications">getBatteryQualifications</a> method.
     * @param string|null $value Value to set for the elecQualificationId property.
    */
    public function setElecQualificationId(?string $value): void {
        $this->elecQualificationId = $value;
    }

    /**
     * Sets the exemptionType property value. The exemption type associated with the CPSC profile.
     * @param ExemptionTypeEnum|null $value Value to set for the exemptionType property.
    */
    public function setExemptionType(?ExemptionTypeEnum $value): void {
        $this->exemptionType = $value;
    }

    /**
     * Sets the fdcSkus property value. This array lists the FDC SKUs associated with the item. An FDC SKU is the SKU label in a forward deployment center.<div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Please contact customer service before using these fields.</p></div>
     * @param array<FDCSkuRequest>|null $value Value to set for the fdcSkus property.
    */
    public function setFdcSkus(?array $value): void {
        $this->fdcSkus = $value;
    }

    /**
     * Sets the height property value. The height of the item in centimeters.
     * @param float|null $value Value to set for the height property.
    */
    public function setHeight(?float $value): void {
        $this->height = $value;
    }

    /**
     * Sets the isLiBattery property value. This boolean indicates if the item contains a battery.
     * @param bool|null $value Value to set for the isLiBattery property.
    */
    public function setIsLiBattery(?bool $value): void {
        $this->isLiBattery = $value;
    }

    /**
     * Sets the length property value. The length of the item in centimeters.
     * @param float|null $value Value to set for the length property.
    */
    public function setLength(?float $value): void {
        $this->length = $value;
    }

    /**
     * Sets the liBatteryType property value. If the item contains a battery, this field indicates the type of battery the item contains.
     * @param LiBatteryTypeEnum|null $value Value to set for the liBatteryType property.
    */
    public function setLiBatteryType(?LiBatteryTypeEnum $value): void {
        $this->liBatteryType = $value;
    }

    /**
     * Sets the nameEn property value. The English name of the item.
     * @param string|null $value Value to set for the nameEn property.
    */
    public function setNameEn(?string $value): void {
        $this->nameEn = $value;
    }

    /**
     * Sets the nameZh property value. The Chinese name of the item.
     * @param string|null $value Value to set for the nameZh property.
    */
    public function setNameZh(?string $value): void {
        $this->nameZh = $value;
    }

    /**
     * Sets the origin property value. The country of origin of the item.
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->origin = $value;
    }

    /**
     * Sets the price property value. The declared price of the item.
     * @param Amount|null $value Value to set for the price property.
    */
    public function setPrice(?Amount $value): void {
        $this->price = $value;
    }

    /**
     * Sets the remark property value. A remark to the seller themselves.
     * @param string|null $value Value to set for the remark property.
    */
    public function setRemark(?string $value): void {
        $this->remark = $value;
    }

    /**
     * Sets the skuNumber property value. The stock keeping unit (SKU) identifier of the item.
     * @param string|null $value Value to set for the skuNumber property.
    */
    public function setSkuNumber(?string $value): void {
        $this->skuNumber = $value;
    }

    /**
     * Sets the tariffCode property value. The Harmonized System code for custom declaration. This value declares the category of the item..
     * @param string|null $value Value to set for the tariffCode property.
    */
    public function setTariffCode(?string $value): void {
        $this->tariffCode = $value;
    }

    /**
     * Sets the weight property value. The weight of the item in grams.
     * @param float|null $value Value to set for the weight property.
    */
    public function setWeight(?float $value): void {
        $this->weight = $value;
    }

    /**
     * Sets the width property value. The width of the item in centimeters.
     * @param float|null $value Value to set for the width property.
    */
    public function setWidth(?float $value): void {
        $this->width = $value;
    }

}
