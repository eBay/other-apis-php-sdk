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

namespace EBay\OtherApis\Generated\Identity\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the business account information.
*/
class BusinessAccount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Address|null $address The type that defines the fields for an address.
    */
    private ?Address $address = null;
    
    /**
     * @var string|null $doingBusinessAs An additional name that is used for their business on eBay. The business name is returned in the <b> name</b> field.
    */
    private ?string $doingBusinessAs = null;
    
    /**
     * @var string|null $email The email address of the business account.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $name The business name associated with the user's eBay account.
    */
    private ?string $name = null;
    
    /**
     * @var Contact|null $primaryContact The type that defines the fields for the information of the contact person for the account.
    */
    private ?Contact $primaryContact = null;
    
    /**
     * @var Phone|null $primaryPhone The type that defines the fields for the details of a phone.
    */
    private ?Phone $primaryPhone = null;
    
    /**
     * @var Phone|null $secondaryPhone The type that defines the fields for the details of a phone.
    */
    private ?Phone $secondaryPhone = null;
    
    /**
     * @var string|null $website The business website address associated with the eBay account.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new BusinessAccount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessAccount {
        return new BusinessAccount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The type that defines the fields for an address.
     * @return Address|null
    */
    public function getAddress(): ?Address {
        return $this->address;
    }

    /**
     * Gets the doingBusinessAs property value. An additional name that is used for their business on eBay. The business name is returned in the <b> name</b> field.
     * @return string|null
    */
    public function getDoingBusinessAs(): ?string {
        return $this->doingBusinessAs;
    }

    /**
     * Gets the email property value. The email address of the business account.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'doingBusinessAs' => fn(ParseNode $n) => $o->setDoingBusinessAs($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'primaryContact' => fn(ParseNode $n) => $o->setPrimaryContact($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'primaryPhone' => fn(ParseNode $n) => $o->setPrimaryPhone($n->getObjectValue([Phone::class, 'createFromDiscriminatorValue'])),
            'secondaryPhone' => fn(ParseNode $n) => $o->setSecondaryPhone($n->getObjectValue([Phone::class, 'createFromDiscriminatorValue'])),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The business name associated with the user's eBay account.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the primaryContact property value. The type that defines the fields for the information of the contact person for the account.
     * @return Contact|null
    */
    public function getPrimaryContact(): ?Contact {
        return $this->primaryContact;
    }

    /**
     * Gets the primaryPhone property value. The type that defines the fields for the details of a phone.
     * @return Phone|null
    */
    public function getPrimaryPhone(): ?Phone {
        return $this->primaryPhone;
    }

    /**
     * Gets the secondaryPhone property value. The type that defines the fields for the details of a phone.
     * @return Phone|null
    */
    public function getSecondaryPhone(): ?Phone {
        return $this->secondaryPhone;
    }

    /**
     * Gets the website property value. The business website address associated with the eBay account.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('doingBusinessAs', $this->getDoingBusinessAs());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('primaryContact', $this->getPrimaryContact());
        $writer->writeObjectValue('primaryPhone', $this->getPrimaryPhone());
        $writer->writeObjectValue('secondaryPhone', $this->getSecondaryPhone());
        $writer->writeStringValue('website', $this->getWebsite());
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
     * Sets the address property value. The type that defines the fields for an address.
     * @param Address|null $value Value to set for the address property.
    */
    public function setAddress(?Address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the doingBusinessAs property value. An additional name that is used for their business on eBay. The business name is returned in the <b> name</b> field.
     * @param string|null $value Value to set for the doingBusinessAs property.
    */
    public function setDoingBusinessAs(?string $value): void {
        $this->doingBusinessAs = $value;
    }

    /**
     * Sets the email property value. The email address of the business account.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the name property value. The business name associated with the user's eBay account.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the primaryContact property value. The type that defines the fields for the information of the contact person for the account.
     * @param Contact|null $value Value to set for the primaryContact property.
    */
    public function setPrimaryContact(?Contact $value): void {
        $this->primaryContact = $value;
    }

    /**
     * Sets the primaryPhone property value. The type that defines the fields for the details of a phone.
     * @param Phone|null $value Value to set for the primaryPhone property.
    */
    public function setPrimaryPhone(?Phone $value): void {
        $this->primaryPhone = $value;
    }

    /**
     * Sets the secondaryPhone property value. The type that defines the fields for the details of a phone.
     * @param Phone|null $value Value to set for the secondaryPhone property.
    */
    public function setSecondaryPhone(?Phone $value): void {
        $this->secondaryPhone = $value;
    }

    /**
     * Sets the website property value. The business website address associated with the eBay account.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

}
