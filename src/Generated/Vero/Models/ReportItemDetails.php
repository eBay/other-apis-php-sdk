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

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the details of an item being reported for violating a product owner's copyright, trademark, or intellectual property rights.
*/
class ReportItemDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $brand The brand name of the item being reported for VeRO violation.<br><br><b>Max length:</b> 50 characters
    */
    private ?string $brand = null;
    
    /**
     * @var bool|null $copyEmailToRightsOwner If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.<br><br>As this field defaults to <code>true</b>, the report will be automatically emailed if this field is omitted.<br><br><b>Default:</b> true
    */
    private ?bool $copyEmailToRightsOwner = null;
    
    /**
     * @var array<string>|null $countries If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9037</code> (Item(s) is unlawful importation of product bearing trademark).
    */
    private ?array $countries = null;
    
    /**
     * @var string|null $detailedMessage This field is used to provide further information about the VeRO reason code.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9052</code> or <code>7052</code> (Other - Provide details information in additional information box below).<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $detailedMessage = null;
    
    /**
     * @var string|null $itemId The unique identifier of the listing being reported for the alleged infringement.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $messageToSeller This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $messageToSeller = null;
    
    /**
     * @var string|null $patent This field is used to specify the number of a product patent that is being violated.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9048</code> (Item(s) infringes a valid patent).<br><br><b>Max length:</b> 15 characters
    */
    private ?string $patent = null;
    
    /**
     * @var array<string>|null $regions If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array.
    */
    private ?array $regions = null;
    
    /**
     * @var string|null $veroReasonCodeId The unique identifier for the type of claimed infringement.<br><br>Use <a href="/api-docs/commerce/vero/resources/vero_reason_code/methods/getVeroReasonCodes" target="_blank ">getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
    */
    private ?string $veroReasonCodeId = null;
    
    /**
     * Instantiates a new ReportItemDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportItemDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportItemDetails {
        return new ReportItemDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brand property value. The brand name of the item being reported for VeRO violation.<br><br><b>Max length:</b> 50 characters
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Gets the copyEmailToRightsOwner property value. If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.<br><br>As this field defaults to <code>true</b>, the report will be automatically emailed if this field is omitted.<br><br><b>Default:</b> true
     * @return bool|null
    */
    public function getCopyEmailToRightsOwner(): ?bool {
        return $this->copyEmailToRightsOwner;
    }

    /**
     * Gets the countries property value. If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9037</code> (Item(s) is unlawful importation of product bearing trademark).
     * @return array<string>|null
    */
    public function getCountries(): ?array {
        return $this->countries;
    }

    /**
     * Gets the detailedMessage property value. This field is used to provide further information about the VeRO reason code.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9052</code> or <code>7052</code> (Other - Provide details information in additional information box below).<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getDetailedMessage(): ?string {
        return $this->detailedMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'copyEmailToRightsOwner' => fn(ParseNode $n) => $o->setCopyEmailToRightsOwner($n->getBooleanValue()),
            'countries' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCountries($val);
            },
            'detailedMessage' => fn(ParseNode $n) => $o->setDetailedMessage($n->getStringValue()),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'messageToSeller' => fn(ParseNode $n) => $o->setMessageToSeller($n->getStringValue()),
            'patent' => fn(ParseNode $n) => $o->setPatent($n->getStringValue()),
            'regions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRegions($val);
            },
            'veroReasonCodeId' => fn(ParseNode $n) => $o->setVeroReasonCodeId($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the listing being reported for the alleged infringement.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the messageToSeller property value. This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getMessageToSeller(): ?string {
        return $this->messageToSeller;
    }

    /**
     * Gets the patent property value. This field is used to specify the number of a product patent that is being violated.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9048</code> (Item(s) infringes a valid patent).<br><br><b>Max length:</b> 15 characters
     * @return string|null
    */
    public function getPatent(): ?string {
        return $this->patent;
    }

    /**
     * Gets the regions property value. If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array.
     * @return array<string>|null
    */
    public function getRegions(): ?array {
        return $this->regions;
    }

    /**
     * Gets the veroReasonCodeId property value. The unique identifier for the type of claimed infringement.<br><br>Use <a href="/api-docs/commerce/vero/resources/vero_reason_code/methods/getVeroReasonCodes" target="_blank ">getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
     * @return string|null
    */
    public function getVeroReasonCodeId(): ?string {
        return $this->veroReasonCodeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeBooleanValue('copyEmailToRightsOwner', $this->getCopyEmailToRightsOwner());
        $writer->writeCollectionOfPrimitiveValues('countries', $this->getCountries());
        $writer->writeStringValue('detailedMessage', $this->getDetailedMessage());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('messageToSeller', $this->getMessageToSeller());
        $writer->writeStringValue('patent', $this->getPatent());
        $writer->writeCollectionOfPrimitiveValues('regions', $this->getRegions());
        $writer->writeStringValue('veroReasonCodeId', $this->getVeroReasonCodeId());
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
     * Sets the brand property value. The brand name of the item being reported for VeRO violation.<br><br><b>Max length:</b> 50 characters
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the copyEmailToRightsOwner property value. If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.<br><br>As this field defaults to <code>true</b>, the report will be automatically emailed if this field is omitted.<br><br><b>Default:</b> true
     * @param bool|null $value Value to set for the copyEmailToRightsOwner property.
    */
    public function setCopyEmailToRightsOwner(?bool $value): void {
        $this->copyEmailToRightsOwner = $value;
    }

    /**
     * Sets the countries property value. If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9037</code> (Item(s) is unlawful importation of product bearing trademark).
     * @param array<string>|null $value Value to set for the countries property.
    */
    public function setCountries(?array $value): void {
        $this->countries = $value;
    }

    /**
     * Sets the detailedMessage property value. This field is used to provide further information about the VeRO reason code.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9052</code> or <code>7052</code> (Other - Provide details information in additional information box below).<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the detailedMessage property.
    */
    public function setDetailedMessage(?string $value): void {
        $this->detailedMessage = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the listing being reported for the alleged infringement.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the messageToSeller property value. This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the messageToSeller property.
    */
    public function setMessageToSeller(?string $value): void {
        $this->messageToSeller = $value;
    }

    /**
     * Sets the patent property value. This field is used to specify the number of a product patent that is being violated.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>9048</code> (Item(s) infringes a valid patent).<br><br><b>Max length:</b> 15 characters
     * @param string|null $value Value to set for the patent property.
    */
    public function setPatent(?string $value): void {
        $this->patent = $value;
    }

    /**
     * Sets the regions property value. If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array.
     * @param array<string>|null $value Value to set for the regions property.
    */
    public function setRegions(?array $value): void {
        $this->regions = $value;
    }

    /**
     * Sets the veroReasonCodeId property value. The unique identifier for the type of claimed infringement.<br><br>Use <a href="/api-docs/commerce/vero/resources/vero_reason_code/methods/getVeroReasonCodes" target="_blank ">getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
     * @param string|null $value Value to set for the veroReasonCodeId property.
    */
    public function setVeroReasonCodeId(?string $value): void {
        $this->veroReasonCodeId = $value;
    }

}
