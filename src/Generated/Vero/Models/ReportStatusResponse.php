<?php

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response fields of the <b>getVeroReport</b> method. 
*/
class ReportStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ReportedItem>|null $reportedItemDetails This array returns the status for each eBay item that was included as part of the report.<br><br>This array is only returned if the <b>includeItemDetails</b> query parameter is set to <code>true</code>.
    */
    private ?array $reportedItemDetails = null;
    
    /**
     * @var string|null $veroReportId The unique packet identifier of the VeRO report.
    */
    private ?string $veroReportId = null;
    
    /**
     * @var string|null $veroReportStatus The processing status of the requested VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
    */
    private ?string $veroReportStatus = null;
    
    /**
     * Instantiates a new ReportStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportStatusResponse {
        return new ReportStatusResponse();
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
            'reportedItemDetails' => fn(ParseNode $n) => $o->setReportedItemDetails($n->getCollectionOfObjectValues([ReportedItem::class, 'createFromDiscriminatorValue'])),
            'veroReportId' => fn(ParseNode $n) => $o->setVeroReportId($n->getStringValue()),
            'veroReportStatus' => fn(ParseNode $n) => $o->setVeroReportStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the reportedItemDetails property value. This array returns the status for each eBay item that was included as part of the report.<br><br>This array is only returned if the <b>includeItemDetails</b> query parameter is set to <code>true</code>.
     * @return array<ReportedItem>|null
    */
    public function getReportedItemDetails(): ?array {
        return $this->reportedItemDetails;
    }

    /**
     * Gets the veroReportId property value. The unique packet identifier of the VeRO report.
     * @return string|null
    */
    public function getVeroReportId(): ?string {
        return $this->veroReportId;
    }

    /**
     * Gets the veroReportStatus property value. The processing status of the requested VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getVeroReportStatus(): ?string {
        return $this->veroReportStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('reportedItemDetails', $this->getReportedItemDetails());
        $writer->writeStringValue('veroReportId', $this->getVeroReportId());
        $writer->writeStringValue('veroReportStatus', $this->getVeroReportStatus());
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
     * Sets the reportedItemDetails property value. This array returns the status for each eBay item that was included as part of the report.<br><br>This array is only returned if the <b>includeItemDetails</b> query parameter is set to <code>true</code>.
     * @param array<ReportedItem>|null $value Value to set for the reportedItemDetails property.
    */
    public function setReportedItemDetails(?array $value): void {
        $this->reportedItemDetails = $value;
    }

    /**
     * Sets the veroReportId property value. The unique packet identifier of the VeRO report.
     * @param string|null $value Value to set for the veroReportId property.
    */
    public function setVeroReportId(?string $value): void {
        $this->veroReportId = $value;
    }

    /**
     * Sets the veroReportStatus property value. The processing status of the requested VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the veroReportStatus property.
    */
    public function setVeroReportStatus(?string $value): void {
        $this->veroReportStatus = $value;
    }

}
