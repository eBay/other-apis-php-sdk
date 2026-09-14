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

namespace EBay\OtherApis\Generated\VeroApiV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the details of the item, live event, or shoppable video being reported for violating a product owner's copyright, trademark, or intellectual property rights.
*/
class ReportViolationDetails implements AdditionalDataHolder, Parsable 
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
     * @var array<string>|null $copyrights This array specifies a list of links to the location of the copyrighted work(s) you claim is being infringed upon. Each link must be specific to where the original work is located, as a link to a general webpage will not suffice.<br><br>Up to <b>20</b> entries may be supplied.<br><br><b>Max length per entry:</b> 1500 characters
    */
    private ?array $copyrights = null;
    
    /**
     * @var array<CountryCodeEnum>|null $countries If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code> (Item(s) is unlawful importation of product bearing trademark).
    */
    private ?array $countries = null;
    
    /**
     * @var string|null $eventId <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>LIVE_EVENT</code> reporting is supported.</span><br>The eBay live event identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>SHOPPABLE_VIDEO</code>.
    */
    private ?string $eventId = null;
    
    /**
     * @var string|null $evidenceOfIp A description detailing how and where the rights owner's IP is being infringed upon.<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $evidenceOfIp = null;
    
    /**
     * @var string|null $infringementDescription The description of why you believe the item or listing infringes your rights.<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $infringementDescription = null;
    
    /**
     * @var string|null $itemId The unique identifier of the listing being reported for the alleged infringement.
    */
    private ?string $itemId = null;
    
    /**
     * @var bool|null $listingDescriptionHasViolation This boolean indicates whether the infringement appears in the item description or not.
    */
    private ?bool $listingDescriptionHasViolation = null;
    
    /**
     * @var string|null $messageToSeller This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $messageToSeller = null;
    
    /**
     * @var array<WorldRegionEnum>|null $regions If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array. <br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code>.
    */
    private ?array $regions = null;
    
    /**
     * @var string|null $registrationNumber This field can be used to provide registration information if the applicable intellectual property right is registered (for example: registration number, IP office name, or link to registration).<br><br>This field is required when <b>veroReasonCodeId</b> is <code>9031</code>, <code>9036</code>, <code>9048</code>, or <code>9049</code>.<br><br><b>Max length:</b> 1000 characters
    */
    private ?string $registrationNumber = null;
    
    /**
     * @var array<string>|null $reportedImageUrls This array is used to specify a list of URLs for images in the listing that you claim infringe your copyrighted work(s). You may right-click an image in the eBay listing and copy the image URL, or describe the infringing content in the listing.<br><br>Up to <b>20</b> image URLs may be supplied at any time.<br><br><b>Max length per URL:</b> 1500 characters
    */
    private ?array $reportedImageUrls = null;
    
    /**
     * @var string|null $timestamp The time stamp indicating where the infringing content appears in the live event or shoppable video (for example, ISO-8601).<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code> or <code>SHOPPABLE_VIDEO</code>.
    */
    private ?string $timestamp = null;
    
    /**
     * @var string|null $veroReasonCodeId The unique identifier for the type of claimed infringement.<br><br>Use <a href="/develop/api/sell/vero_api_v2#sell-vero_api_v2-vero_reason_code-getveroreasoncodes" >getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
    */
    private ?string $veroReasonCodeId = null;
    
    /**
     * @var string|null $videoId <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>SHOPPABLE_VIDEO</code> reporting is supported.</span><br>The shoppable video identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>SHOPPABLE_VIDEO</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>LIVE_EVENT</code>.
    */
    private ?string $videoId = null;
    
    /**
     * Instantiates a new ReportViolationDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportViolationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportViolationDetails {
        return new ReportViolationDetails();
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
     * Gets the copyrights property value. This array specifies a list of links to the location of the copyrighted work(s) you claim is being infringed upon. Each link must be specific to where the original work is located, as a link to a general webpage will not suffice.<br><br>Up to <b>20</b> entries may be supplied.<br><br><b>Max length per entry:</b> 1500 characters
     * @return array<string>|null
    */
    public function getCopyrights(): ?array {
        return $this->copyrights;
    }

    /**
     * Gets the countries property value. If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code> (Item(s) is unlawful importation of product bearing trademark).
     * @return array<CountryCodeEnum>|null
    */
    public function getCountries(): ?array {
        return $this->countries;
    }

    /**
     * Gets the eventId property value. <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>LIVE_EVENT</code> reporting is supported.</span><br>The eBay live event identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>SHOPPABLE_VIDEO</code>.
     * @return string|null
    */
    public function getEventId(): ?string {
        return $this->eventId;
    }

    /**
     * Gets the evidenceOfIp property value. A description detailing how and where the rights owner's IP is being infringed upon.<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getEvidenceOfIp(): ?string {
        return $this->evidenceOfIp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'copyrights' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCopyrights($val);
            },
            'countries' => fn(ParseNode $n) => $o->setCountries($n->getCollectionOfEnumValues(CountryCodeEnum::class)),
            'eventId' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
            'evidenceOfIp' => fn(ParseNode $n) => $o->setEvidenceOfIp($n->getStringValue()),
            'infringementDescription' => fn(ParseNode $n) => $o->setInfringementDescription($n->getStringValue()),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'listingDescriptionHasViolation' => fn(ParseNode $n) => $o->setListingDescriptionHasViolation($n->getBooleanValue()),
            'messageToSeller' => fn(ParseNode $n) => $o->setMessageToSeller($n->getStringValue()),
            'regions' => fn(ParseNode $n) => $o->setRegions($n->getCollectionOfEnumValues(WorldRegionEnum::class)),
            'registrationNumber' => fn(ParseNode $n) => $o->setRegistrationNumber($n->getStringValue()),
            'reportedImageUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReportedImageUrls($val);
            },
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'veroReasonCodeId' => fn(ParseNode $n) => $o->setVeroReasonCodeId($n->getStringValue()),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
    }

    /**
     * Gets the infringementDescription property value. The description of why you believe the item or listing infringes your rights.<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getInfringementDescription(): ?string {
        return $this->infringementDescription;
    }

    /**
     * Gets the itemId property value. The unique identifier of the listing being reported for the alleged infringement.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the listingDescriptionHasViolation property value. This boolean indicates whether the infringement appears in the item description or not.
     * @return bool|null
    */
    public function getListingDescriptionHasViolation(): ?bool {
        return $this->listingDescriptionHasViolation;
    }

    /**
     * Gets the messageToSeller property value. This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getMessageToSeller(): ?string {
        return $this->messageToSeller;
    }

    /**
     * Gets the regions property value. If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array. <br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code>.
     * @return array<WorldRegionEnum>|null
    */
    public function getRegions(): ?array {
        return $this->regions;
    }

    /**
     * Gets the registrationNumber property value. This field can be used to provide registration information if the applicable intellectual property right is registered (for example: registration number, IP office name, or link to registration).<br><br>This field is required when <b>veroReasonCodeId</b> is <code>9031</code>, <code>9036</code>, <code>9048</code>, or <code>9049</code>.<br><br><b>Max length:</b> 1000 characters
     * @return string|null
    */
    public function getRegistrationNumber(): ?string {
        return $this->registrationNumber;
    }

    /**
     * Gets the reportedImageUrls property value. This array is used to specify a list of URLs for images in the listing that you claim infringe your copyrighted work(s). You may right-click an image in the eBay listing and copy the image URL, or describe the infringing content in the listing.<br><br>Up to <b>20</b> image URLs may be supplied at any time.<br><br><b>Max length per URL:</b> 1500 characters
     * @return array<string>|null
    */
    public function getReportedImageUrls(): ?array {
        return $this->reportedImageUrls;
    }

    /**
     * Gets the timestamp property value. The time stamp indicating where the infringing content appears in the live event or shoppable video (for example, ISO-8601).<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code> or <code>SHOPPABLE_VIDEO</code>.
     * @return string|null
    */
    public function getTimestamp(): ?string {
        return $this->timestamp;
    }

    /**
     * Gets the veroReasonCodeId property value. The unique identifier for the type of claimed infringement.<br><br>Use <a href="/develop/api/sell/vero_api_v2#sell-vero_api_v2-vero_reason_code-getveroreasoncodes" >getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
     * @return string|null
    */
    public function getVeroReasonCodeId(): ?string {
        return $this->veroReasonCodeId;
    }

    /**
     * Gets the videoId property value. <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>SHOPPABLE_VIDEO</code> reporting is supported.</span><br>The shoppable video identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>SHOPPABLE_VIDEO</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>LIVE_EVENT</code>.
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->videoId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeCollectionOfPrimitiveValues('copyrights', $this->getCopyrights());
        $writer->writeCollectionOfEnumValues('countries', $this->getCountries());
        $writer->writeStringValue('eventId', $this->getEventId());
        $writer->writeStringValue('evidenceOfIp', $this->getEvidenceOfIp());
        $writer->writeStringValue('infringementDescription', $this->getInfringementDescription());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeBooleanValue('listingDescriptionHasViolation', $this->getListingDescriptionHasViolation());
        $writer->writeStringValue('messageToSeller', $this->getMessageToSeller());
        $writer->writeCollectionOfEnumValues('regions', $this->getRegions());
        $writer->writeStringValue('registrationNumber', $this->getRegistrationNumber());
        $writer->writeCollectionOfPrimitiveValues('reportedImageUrls', $this->getReportedImageUrls());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('veroReasonCodeId', $this->getVeroReasonCodeId());
        $writer->writeStringValue('videoId', $this->getVideoId());
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
     * Sets the copyrights property value. This array specifies a list of links to the location of the copyrighted work(s) you claim is being infringed upon. Each link must be specific to where the original work is located, as a link to a general webpage will not suffice.<br><br>Up to <b>20</b> entries may be supplied.<br><br><b>Max length per entry:</b> 1500 characters
     * @param array<string>|null $value Value to set for the copyrights property.
    */
    public function setCopyrights(?array $value): void {
        $this->copyrights = $value;
    }

    /**
     * Sets the countries property value. If the infringement type stated in the <b>VeroReasonCodeId</b> has anything to do with which country the item is being shipped to, each country that would trigger this infringement type should be specified in this comma-delimited array.<br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code> (Item(s) is unlawful importation of product bearing trademark).
     * @param array<CountryCodeEnum>|null $value Value to set for the countries property.
    */
    public function setCountries(?array $value): void {
        $this->countries = $value;
    }

    /**
     * Sets the eventId property value. <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>LIVE_EVENT</code> reporting is supported.</span><br>The eBay live event identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>SHOPPABLE_VIDEO</code>.
     * @param string|null $value Value to set for the eventId property.
    */
    public function setEventId(?string $value): void {
        $this->eventId = $value;
    }

    /**
     * Sets the evidenceOfIp property value. A description detailing how and where the rights owner's IP is being infringed upon.<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the evidenceOfIp property.
    */
    public function setEvidenceOfIp(?string $value): void {
        $this->evidenceOfIp = $value;
    }

    /**
     * Sets the infringementDescription property value. The description of why you believe the item or listing infringes your rights.<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the infringementDescription property.
    */
    public function setInfringementDescription(?string $value): void {
        $this->infringementDescription = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the listing being reported for the alleged infringement.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the listingDescriptionHasViolation property value. This boolean indicates whether the infringement appears in the item description or not.
     * @param bool|null $value Value to set for the listingDescriptionHasViolation property.
    */
    public function setListingDescriptionHasViolation(?bool $value): void {
        $this->listingDescriptionHasViolation = $value;
    }

    /**
     * Sets the messageToSeller property value. This field is used by the VeRO Program member to provide more details to the seller as to why the item is being reported for the alleged infringement.<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the messageToSeller property.
    */
    public function setMessageToSeller(?string $value): void {
        $this->messageToSeller = $value;
    }

    /**
     * Sets the regions property value. If the infringement type stated in the <b>veroReasonCodeId</b> has anything to do with which geographical region the item is being shipped to, each region that would trigger this infringement type should be specified in this comma-delimited array. <br><br>This field is required when the <b>veroReasonCodeId</b> is <code>2861</code>.
     * @param array<WorldRegionEnum>|null $value Value to set for the regions property.
    */
    public function setRegions(?array $value): void {
        $this->regions = $value;
    }

    /**
     * Sets the registrationNumber property value. This field can be used to provide registration information if the applicable intellectual property right is registered (for example: registration number, IP office name, or link to registration).<br><br>This field is required when <b>veroReasonCodeId</b> is <code>9031</code>, <code>9036</code>, <code>9048</code>, or <code>9049</code>.<br><br><b>Max length:</b> 1000 characters
     * @param string|null $value Value to set for the registrationNumber property.
    */
    public function setRegistrationNumber(?string $value): void {
        $this->registrationNumber = $value;
    }

    /**
     * Sets the reportedImageUrls property value. This array is used to specify a list of URLs for images in the listing that you claim infringe your copyrighted work(s). You may right-click an image in the eBay listing and copy the image URL, or describe the infringing content in the listing.<br><br>Up to <b>20</b> image URLs may be supplied at any time.<br><br><b>Max length per URL:</b> 1500 characters
     * @param array<string>|null $value Value to set for the reportedImageUrls property.
    */
    public function setReportedImageUrls(?array $value): void {
        $this->reportedImageUrls = $value;
    }

    /**
     * Sets the timestamp property value. The time stamp indicating where the infringing content appears in the live event or shoppable video (for example, ISO-8601).<br><br>This field is required when <b>reportType</b> is <code>LIVE_EVENT</code> or <code>SHOPPABLE_VIDEO</code>.
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the veroReasonCodeId property value. The unique identifier for the type of claimed infringement.<br><br>Use <a href="/develop/api/sell/vero_api_v2#sell-vero_api_v2-vero_reason_code-getveroreasoncodes" >getVeroReasonCodes</a> to retrieve a list of valid reason codes for a given eBay site.
     * @param string|null $value Value to set for the veroReasonCodeId property.
    */
    public function setVeroReasonCodeId(?string $value): void {
        $this->veroReasonCodeId = $value;
    }

    /**
     * Sets the videoId property value. <span class="tablenote"><b>Note:</b> Not currently available. This field is reserved for a future release when <code>SHOPPABLE_VIDEO</code> reporting is supported.</span><br>The shoppable video identifier for the reported infringement.<br><br>This field is required when <b>reportType</b> is <code>SHOPPABLE_VIDEO</code>. This field is not applicable when <b>reportType</b> is <code>LISTING</code> or <code>LIVE_EVENT</code>.
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
