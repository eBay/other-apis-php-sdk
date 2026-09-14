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

/**
 * This type defines the request fields used in the <b>reportVeroViolation</b> method.
*/
class ReportVeroViolationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $contactEmail The reporter's public email through which they wish to be contacted.
    */
    private ?string $contactEmail = null;
    
    /**
     * @var string|null $reporterId The unique identifier associated with the reporter's VeRO account.<br><br>This value is the username assigned to the rights owner or authorized representative submitting the report. This identifier is used to authenticate the submission and associate it with the correct VeRO account.
    */
    private ?string $reporterId = null;
    
    /**
     * @var ReportTypeEnum|null $reportType The type of content being reported.
    */
    private ?ReportTypeEnum $reportType = null;
    
    /**
     * @var array<ReportViolationDetails>|null $reportViolations This array can be used to report one or more eBay items, live events, or shoppable videos that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.
    */
    private ?array $reportViolations = null;
    
    /**
     * @var string|null $rightsOwnerId The unique identifier assigned to a Rights Owner within the VeRO Portal.<br><br> This ID identifies the Rights Owner whose intellectual property rights are the subject of the report. Reporters submitting on behalf of a Rights Owner, including authorized representatives and third-party agents, must provide the correct Rights Owner ID. The Rights Owner ID can be found in the VeRO Portal.
    */
    private ?string $rightsOwnerId = null;
    
    /**
     * Instantiates a new ReportVeroViolationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportVeroViolationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportVeroViolationRequest {
        return new ReportVeroViolationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contactEmail property value. The reporter's public email through which they wish to be contacted.
     * @return string|null
    */
    public function getContactEmail(): ?string {
        return $this->contactEmail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contactEmail' => fn(ParseNode $n) => $o->setContactEmail($n->getStringValue()),
            'reporterId' => fn(ParseNode $n) => $o->setReporterId($n->getStringValue()),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getEnumValue(ReportTypeEnum::class)),
            'reportViolations' => fn(ParseNode $n) => $o->setReportViolations($n->getCollectionOfObjectValues([ReportViolationDetails::class, 'createFromDiscriminatorValue'])),
            'rightsOwnerId' => fn(ParseNode $n) => $o->setRightsOwnerId($n->getStringValue()),
        ];
    }

    /**
     * Gets the reporterId property value. The unique identifier associated with the reporter's VeRO account.<br><br>This value is the username assigned to the rights owner or authorized representative submitting the report. This identifier is used to authenticate the submission and associate it with the correct VeRO account.
     * @return string|null
    */
    public function getReporterId(): ?string {
        return $this->reporterId;
    }

    /**
     * Gets the reportType property value. The type of content being reported.
     * @return ReportTypeEnum|null
    */
    public function getReportType(): ?ReportTypeEnum {
        return $this->reportType;
    }

    /**
     * Gets the reportViolations property value. This array can be used to report one or more eBay items, live events, or shoppable videos that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.
     * @return array<ReportViolationDetails>|null
    */
    public function getReportViolations(): ?array {
        return $this->reportViolations;
    }

    /**
     * Gets the rightsOwnerId property value. The unique identifier assigned to a Rights Owner within the VeRO Portal.<br><br> This ID identifies the Rights Owner whose intellectual property rights are the subject of the report. Reporters submitting on behalf of a Rights Owner, including authorized representatives and third-party agents, must provide the correct Rights Owner ID. The Rights Owner ID can be found in the VeRO Portal.
     * @return string|null
    */
    public function getRightsOwnerId(): ?string {
        return $this->rightsOwnerId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contactEmail', $this->getContactEmail());
        $writer->writeStringValue('reporterId', $this->getReporterId());
        $writer->writeEnumValue('reportType', $this->getReportType());
        $writer->writeCollectionOfObjectValues('reportViolations', $this->getReportViolations());
        $writer->writeStringValue('rightsOwnerId', $this->getRightsOwnerId());
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
     * Sets the contactEmail property value. The reporter's public email through which they wish to be contacted.
     * @param string|null $value Value to set for the contactEmail property.
    */
    public function setContactEmail(?string $value): void {
        $this->contactEmail = $value;
    }

    /**
     * Sets the reporterId property value. The unique identifier associated with the reporter's VeRO account.<br><br>This value is the username assigned to the rights owner or authorized representative submitting the report. This identifier is used to authenticate the submission and associate it with the correct VeRO account.
     * @param string|null $value Value to set for the reporterId property.
    */
    public function setReporterId(?string $value): void {
        $this->reporterId = $value;
    }

    /**
     * Sets the reportType property value. The type of content being reported.
     * @param ReportTypeEnum|null $value Value to set for the reportType property.
    */
    public function setReportType(?ReportTypeEnum $value): void {
        $this->reportType = $value;
    }

    /**
     * Sets the reportViolations property value. This array can be used to report one or more eBay items, live events, or shoppable videos that are allegedly violating the product owner's copyright, trademark, or intellectual property rights.
     * @param array<ReportViolationDetails>|null $value Value to set for the reportViolations property.
    */
    public function setReportViolations(?array $value): void {
        $this->reportViolations = $value;
    }

    /**
     * Sets the rightsOwnerId property value. The unique identifier assigned to a Rights Owner within the VeRO Portal.<br><br> This ID identifies the Rights Owner whose intellectual property rights are the subject of the report. Reporters submitting on behalf of a Rights Owner, including authorized representatives and third-party agents, must provide the correct Rights Owner ID. The Rights Owner ID can be found in the VeRO Portal.
     * @param string|null $value Value to set for the rightsOwnerId property.
    */
    public function setRightsOwnerId(?string $value): void {
        $this->rightsOwnerId = $value;
    }

}
