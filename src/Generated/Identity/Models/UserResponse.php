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
 * The type that defines the fields for the <b>getUser</b> method.
*/
class UserResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountType Indicates the user account type. This is determined when the user registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries:   <br /><br />EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br /><br /><b> Valid Values:</b> BUSINESS or INDIVIDUAL <br /><br />Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:AccountTypeEnum'>eBay API documentation</a>
    */
    private ?string $accountType = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BusinessAccount|null $businessAccount The type that defines the fields for the business account information.
    */
    private ?BusinessAccount $businessAccount = null;
    
    /**
     * @var IndividualAccount|null $individualAccount The type that defines the fields for the information of an individual account.
    */
    private ?IndividualAccount $individualAccount = null;
    
    /**
     * @var string|null $registrationMarketplaceId The eBay site on which the account is registered. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $registrationMarketplaceId = null;
    
    /**
     * @var string|null $status Indicates the user's account status. Possible values: <code>CONFIRMED</code>, <code>UNCONFIRMED</code>, <code>ACCOUNTONHOLD</code> and <code>UNDETERMINED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:UserStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $userId The eBay immutable user ID of the user's account and can always be used to identify the user.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $username The user name, which was specific by the user when they created the account. <br /><br /><span class="tablenote"><b>Note: </b> This value can be changed by the user.</span>
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new UserResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserResponse {
        return new UserResponse();
    }

    /**
     * Gets the accountType property value. Indicates the user account type. This is determined when the user registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries:   <br /><br />EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br /><br /><b> Valid Values:</b> BUSINESS or INDIVIDUAL <br /><br />Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:AccountTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAccountType(): ?string {
        return $this->accountType;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the businessAccount property value. The type that defines the fields for the business account information.
     * @return BusinessAccount|null
    */
    public function getBusinessAccount(): ?BusinessAccount {
        return $this->businessAccount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountType' => fn(ParseNode $n) => $o->setAccountType($n->getStringValue()),
            'businessAccount' => fn(ParseNode $n) => $o->setBusinessAccount($n->getObjectValue([BusinessAccount::class, 'createFromDiscriminatorValue'])),
            'individualAccount' => fn(ParseNode $n) => $o->setIndividualAccount($n->getObjectValue([IndividualAccount::class, 'createFromDiscriminatorValue'])),
            'registrationMarketplaceId' => fn(ParseNode $n) => $o->setRegistrationMarketplaceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the individualAccount property value. The type that defines the fields for the information of an individual account.
     * @return IndividualAccount|null
    */
    public function getIndividualAccount(): ?IndividualAccount {
        return $this->individualAccount;
    }

    /**
     * Gets the registrationMarketplaceId property value. The eBay site on which the account is registered. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRegistrationMarketplaceId(): ?string {
        return $this->registrationMarketplaceId;
    }

    /**
     * Gets the status property value. Indicates the user's account status. Possible values: <code>CONFIRMED</code>, <code>UNCONFIRMED</code>, <code>ACCOUNTONHOLD</code> and <code>UNDETERMINED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:UserStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the userId property value. The eBay immutable user ID of the user's account and can always be used to identify the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the username property value. The user name, which was specific by the user when they created the account. <br /><br /><span class="tablenote"><b>Note: </b> This value can be changed by the user.</span>
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountType', $this->getAccountType());
        $writer->writeObjectValue('businessAccount', $this->getBusinessAccount());
        $writer->writeObjectValue('individualAccount', $this->getIndividualAccount());
        $writer->writeStringValue('registrationMarketplaceId', $this->getRegistrationMarketplaceId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('username', $this->getUsername());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountType property value. Indicates the user account type. This is determined when the user registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries:   <br /><br />EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br /><br /><b> Valid Values:</b> BUSINESS or INDIVIDUAL <br /><br />Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:AccountTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the accountType property.
    */
    public function setAccountType(?string $value): void {
        $this->accountType = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the businessAccount property value. The type that defines the fields for the business account information.
     * @param BusinessAccount|null $value Value to set for the businessAccount property.
    */
    public function setBusinessAccount(?BusinessAccount $value): void {
        $this->businessAccount = $value;
    }

    /**
     * Sets the individualAccount property value. The type that defines the fields for the information of an individual account.
     * @param IndividualAccount|null $value Value to set for the individualAccount property.
    */
    public function setIndividualAccount(?IndividualAccount $value): void {
        $this->individualAccount = $value;
    }

    /**
     * Sets the registrationMarketplaceId property value. The eBay site on which the account is registered. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the registrationMarketplaceId property.
    */
    public function setRegistrationMarketplaceId(?string $value): void {
        $this->registrationMarketplaceId = $value;
    }

    /**
     * Sets the status property value. Indicates the user's account status. Possible values: <code>CONFIRMED</code>, <code>UNCONFIRMED</code>, <code>ACCOUNTONHOLD</code> and <code>UNDETERMINED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/identity/types/api:UserStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the userId property value. The eBay immutable user ID of the user's account and can always be used to identify the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the username property value. The user name, which was specific by the user when they created the account. <br /><br /><span class="tablenote"><b>Note: </b> This value can be changed by the user.</span>
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
