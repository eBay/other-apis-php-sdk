<?php

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response fields used in the <b>createVeroReport</b> method.
*/
class VeroReportItemsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $veroReportId The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
    */
    private ?string $veroReportId = null;
    
    /**
     * @var string|null $veroReportStatus The processing status of the VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
    */
    private ?string $veroReportStatus = null;
    
    /**
     * Instantiates a new VeroReportItemsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReportItemsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReportItemsResponse {
        return new VeroReportItemsResponse();
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
            'veroReportId' => fn(ParseNode $n) => $o->setVeroReportId($n->getStringValue()),
            'veroReportStatus' => fn(ParseNode $n) => $o->setVeroReportStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the veroReportId property value. The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @return string|null
    */
    public function getVeroReportId(): ?string {
        return $this->veroReportId;
    }

    /**
     * Gets the veroReportStatus property value. The processing status of the VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
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
     * Sets the veroReportId property value. The unique identifier of the VeRO report that the item violations have been added to.<br><br><span class="tablenote"><b>Note:</b> Users should keep track of the returned <b>veroReportId</b>, as there is no programmatic way to retrieve this value at this time.</span>
     * @param string|null $value Value to set for the veroReportId property.
    */
    public function setVeroReportId(?string $value): void {
        $this->veroReportId = $value;
    }

    /**
     * Sets the veroReportStatus property value. The processing status of the VeRO report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the veroReportStatus property.
    */
    public function setVeroReportStatus(?string $value): void {
        $this->veroReportStatus = $value;
    }

}
