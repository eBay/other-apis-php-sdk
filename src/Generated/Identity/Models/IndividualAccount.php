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
 * The type that defines the fields for information about an individual eBay account.
*/
class IndividualAccount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $email The eBay user's registration email address.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $firstName The eBay user's first name.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName The eBay user's last name.
    */
    private ?string $lastName = null;
    
    /**
     * @var Phone|null $primaryPhone The primary phone number associated with the individual account, if available.
    */
    private ?Phone $primaryPhone = null;
    
    /**
     * @var Address|null $registrationAddress The container that returns the eBay user's address information.
    */
    private ?Address $registrationAddress = null;
    
    /**
     * @var Phone|null $secondaryPhone A secondary phone number registered with the individual eBay account.
    */
    private ?Phone $secondaryPhone = null;
    
    /**
     * Instantiates a new IndividualAccount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndividualAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndividualAccount {
        return new IndividualAccount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. The eBay user's registration email address.
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
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'primaryPhone' => fn(ParseNode $n) => $o->setPrimaryPhone($n->getObjectValue([Phone::class, 'createFromDiscriminatorValue'])),
            'registrationAddress' => fn(ParseNode $n) => $o->setRegistrationAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'secondaryPhone' => fn(ParseNode $n) => $o->setSecondaryPhone($n->getObjectValue([Phone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the firstName property value. The eBay user's first name.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. The eBay user's last name.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the primaryPhone property value. The primary phone number associated with the individual account, if available.
     * @return Phone|null
    */
    public function getPrimaryPhone(): ?Phone {
        return $this->primaryPhone;
    }

    /**
     * Gets the registrationAddress property value. The container that returns the eBay user's address information.
     * @return Address|null
    */
    public function getRegistrationAddress(): ?Address {
        return $this->registrationAddress;
    }

    /**
     * Gets the secondaryPhone property value. A secondary phone number registered with the individual eBay account.
     * @return Phone|null
    */
    public function getSecondaryPhone(): ?Phone {
        return $this->secondaryPhone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeObjectValue('primaryPhone', $this->getPrimaryPhone());
        $writer->writeObjectValue('registrationAddress', $this->getRegistrationAddress());
        $writer->writeObjectValue('secondaryPhone', $this->getSecondaryPhone());
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
     * Sets the email property value. The eBay user's registration email address.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. The eBay user's first name.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. The eBay user's last name.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the primaryPhone property value. The primary phone number associated with the individual account, if available.
     * @param Phone|null $value Value to set for the primaryPhone property.
    */
    public function setPrimaryPhone(?Phone $value): void {
        $this->primaryPhone = $value;
    }

    /**
     * Sets the registrationAddress property value. The container that returns the eBay user's address information.
     * @param Address|null $value Value to set for the registrationAddress property.
    */
    public function setRegistrationAddress(?Address $value): void {
        $this->registrationAddress = $value;
    }

    /**
     * Sets the secondaryPhone property value. A secondary phone number registered with the individual eBay account.
     * @param Phone|null $value Value to set for the secondaryPhone property.
    */
    public function setSecondaryPhone(?Phone $value): void {
        $this->secondaryPhone = $value;
    }

}
