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
 * This type defines the field used to create a pickup address.
*/
class PickupAddressRequestData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $city The city code of the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $company The company name associated with the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $company = null;
    
    /**
     * @var string|null $contact The name of the contact person associated with the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $contact = null;
    
    /**
     * @var string|null $countryCode The two-letter country code of the pickup address.<br><br><b>Valid values</b>:<ul><li>CN</li><li>HK</li></ul>
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $district The district code of the pickup address. <br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.
    */
    private ?string $district = null;
    
    /**
     * @var string|null $name The name of the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone The phone number associated with the pickup address.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $postcode The postal code of the pickup address.
    */
    private ?string $postcode = null;
    
    /**
     * @var string|null $province The province code of the the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid province codes.
    */
    private ?string $province = null;
    
    /**
     * @var string|null $street1 The first line of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $street1 = null;
    
    /**
     * @var string|null $street2 The second line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $street2 = null;
    
    /**
     * @var string|null $street3 The third line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
    */
    private ?string $street3 = null;
    
    /**
     * Instantiates a new PickupAddressRequestData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PickupAddressRequestData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PickupAddressRequestData {
        return new PickupAddressRequestData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city code of the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the company property value. The company name associated with the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getCompany(): ?string {
        return $this->company;
    }

    /**
     * Gets the contact property value. The name of the contact person associated with the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getContact(): ?string {
        return $this->contact;
    }

    /**
     * Gets the countryCode property value. The two-letter country code of the pickup address.<br><br><b>Valid values</b>:<ul><li>CN</li><li>HK</li></ul>
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the district property value. The district code of the pickup address. <br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.
     * @return string|null
    */
    public function getDistrict(): ?string {
        return $this->district;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'company' => fn(ParseNode $n) => $o->setCompany($n->getStringValue()),
            'contact' => fn(ParseNode $n) => $o->setContact($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'district' => fn(ParseNode $n) => $o->setDistrict($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'postcode' => fn(ParseNode $n) => $o->setPostcode($n->getStringValue()),
            'province' => fn(ParseNode $n) => $o->setProvince($n->getStringValue()),
            'street1' => fn(ParseNode $n) => $o->setStreet1($n->getStringValue()),
            'street2' => fn(ParseNode $n) => $o->setStreet2($n->getStringValue()),
            'street3' => fn(ParseNode $n) => $o->setStreet3($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the phone property value. The phone number associated with the pickup address.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the postcode property value. The postal code of the pickup address.
     * @return string|null
    */
    public function getPostcode(): ?string {
        return $this->postcode;
    }

    /**
     * Gets the province property value. The province code of the the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid province codes.
     * @return string|null
    */
    public function getProvince(): ?string {
        return $this->province;
    }

    /**
     * Gets the street1 property value. The first line of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getStreet1(): ?string {
        return $this->street1;
    }

    /**
     * Gets the street2 property value. The second line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getStreet2(): ?string {
        return $this->street2;
    }

    /**
     * Gets the street3 property value. The third line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @return string|null
    */
    public function getStreet3(): ?string {
        return $this->street3;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('company', $this->getCompany());
        $writer->writeStringValue('contact', $this->getContact());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('district', $this->getDistrict());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('postcode', $this->getPostcode());
        $writer->writeStringValue('province', $this->getProvince());
        $writer->writeStringValue('street1', $this->getStreet1());
        $writer->writeStringValue('street2', $this->getStreet2());
        $writer->writeStringValue('street3', $this->getStreet3());
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
     * Sets the city property value. The city code of the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the company property value. The company name associated with the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the company property.
    */
    public function setCompany(?string $value): void {
        $this->company = $value;
    }

    /**
     * Sets the contact property value. The name of the contact person associated with the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the contact property.
    */
    public function setContact(?string $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the countryCode property value. The two-letter country code of the pickup address.<br><br><b>Valid values</b>:<ul><li>CN</li><li>HK</li></ul>
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the district property value. The district code of the pickup address. <br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.
     * @param string|null $value Value to set for the district property.
    */
    public function setDistrict(?string $value): void {
        $this->district = $value;
    }

    /**
     * Sets the name property value. The name of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the phone property value. The phone number associated with the pickup address.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the postcode property value. The postal code of the pickup address.
     * @param string|null $value Value to set for the postcode property.
    */
    public function setPostcode(?string $value): void {
        $this->postcode = $value;
    }

    /**
     * Sets the province property value. The province code of the the pickup address.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid province codes.
     * @param string|null $value Value to set for the province property.
    */
    public function setProvince(?string $value): void {
        $this->province = $value;
    }

    /**
     * Sets the street1 property value. The first line of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the street1 property.
    */
    public function setStreet1(?string $value): void {
        $this->street1 = $value;
    }

    /**
     * Sets the street2 property value. The second line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the street2 property.
    */
    public function setStreet2(?string $value): void {
        $this->street2 = $value;
    }

    /**
     * Sets the street3 property value. The third line, if applicable, of the street address of the pickup address.<br><br><b>Max length</b>: 50 characters
     * @param string|null $value Value to set for the street3 property.
    */
    public function setStreet3(?string $value): void {
        $this->street3 = $value;
    }

}
