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
 * This type defines the VeRO report resource / entity. It is returned when a report is created via <b>reportVeroViolation</b> and when a report is retrieved via <b>getVeroReport</b>. The <b>reportLineItems</b> array is populated over the report's lifecycle and is only returned by <b>getVeroReport</b> when <b>include_report_details</b> is <code>true</code>.
*/
class VeroReport implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ReportedViolation>|null $reportLineItems This array returns the status for each eBay item, live event, or video that was included as part of the report.<br><br>This array is only returned if the <b>include_report_details</b> query parameter is set to <code>true</code>.
    */
    private ?array $reportLineItems = null;
    
    /**
     * @var ReportTypeEnum|null $reportType The type of content being reported.
    */
    private ?ReportTypeEnum $reportType = null;
    
    /**
     * @var string|null $veroReportId The unique packet identifier of the VeRO report.
    */
    private ?string $veroReportId = null;
    
    /**
     * @var VeroReportStatusEnum|null $veroReportStatus The processing status of the requested VeRO report.
    */
    private ?VeroReportStatusEnum $veroReportStatus = null;
    
    /**
     * Instantiates a new VeroReport and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReport {
        return new VeroReport();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'reportLineItems' => fn(ParseNode $n) => $o->setReportLineItems($n->getCollectionOfObjectValues([ReportedViolation::class, 'createFromDiscriminatorValue'])),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getEnumValue(ReportTypeEnum::class)),
            'veroReportId' => fn(ParseNode $n) => $o->setVeroReportId($n->getStringValue()),
            'veroReportStatus' => fn(ParseNode $n) => $o->setVeroReportStatus($n->getEnumValue(VeroReportStatusEnum::class)),
        ];
    }

    /**
     * Gets the reportLineItems property value. This array returns the status for each eBay item, live event, or video that was included as part of the report.<br><br>This array is only returned if the <b>include_report_details</b> query parameter is set to <code>true</code>.
     * @return array<ReportedViolation>|null
    */
    public function getReportLineItems(): ?array {
        return $this->reportLineItems;
    }

    /**
     * Gets the reportType property value. The type of content being reported.
     * @return ReportTypeEnum|null
    */
    public function getReportType(): ?ReportTypeEnum {
        return $this->reportType;
    }

    /**
     * Gets the veroReportId property value. The unique packet identifier of the VeRO report.
     * @return string|null
    */
    public function getVeroReportId(): ?string {
        return $this->veroReportId;
    }

    /**
     * Gets the veroReportStatus property value. The processing status of the requested VeRO report.
     * @return VeroReportStatusEnum|null
    */
    public function getVeroReportStatus(): ?VeroReportStatusEnum {
        return $this->veroReportStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('reportLineItems', $this->getReportLineItems());
        $writer->writeEnumValue('reportType', $this->getReportType());
        $writer->writeStringValue('veroReportId', $this->getVeroReportId());
        $writer->writeEnumValue('veroReportStatus', $this->getVeroReportStatus());
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
     * Sets the reportLineItems property value. This array returns the status for each eBay item, live event, or video that was included as part of the report.<br><br>This array is only returned if the <b>include_report_details</b> query parameter is set to <code>true</code>.
     * @param array<ReportedViolation>|null $value Value to set for the reportLineItems property.
    */
    public function setReportLineItems(?array $value): void {
        $this->reportLineItems = $value;
    }

    /**
     * Sets the reportType property value. The type of content being reported.
     * @param ReportTypeEnum|null $value Value to set for the reportType property.
    */
    public function setReportType(?ReportTypeEnum $value): void {
        $this->reportType = $value;
    }

    /**
     * Sets the veroReportId property value. The unique packet identifier of the VeRO report.
     * @param string|null $value Value to set for the veroReportId property.
    */
    public function setVeroReportId(?string $value): void {
        $this->veroReportId = $value;
    }

    /**
     * Sets the veroReportStatus property value. The processing status of the requested VeRO report.
     * @param VeroReportStatusEnum|null $value Value to set for the veroReportStatus property.
    */
    public function setVeroReportStatus(?VeroReportStatusEnum $value): void {
        $this->veroReportStatus = $value;
    }

}
