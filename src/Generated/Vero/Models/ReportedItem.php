<?php

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the item ID and status of a VeRO report. If applicable, a reason for report failure is also returned.
*/
class ReportedItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $itemId The unique identifier of the listing that is being reported for copyright, trademark, or intellectual right infringement.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $reasonForFailure This text explanation is submitted by eBay when the submission of a VeRO Report has failed or was blocked.<br><br>This field is conditionally returned if the <b>status</b> value of the report is <code>ClarificationRequired</code> or <code>SubmissionFailed</code>.
    */
    private ?string $reasonForFailure = null;
    
    /**
     * @var string|null $status The current status of the VeRO reported item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportedItemStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new ReportedItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportedItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportedItem {
        return new ReportedItem();
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
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'reasonForFailure' => fn(ParseNode $n) => $o->setReasonForFailure($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the listing that is being reported for copyright, trademark, or intellectual right infringement.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the reasonForFailure property value. This text explanation is submitted by eBay when the submission of a VeRO Report has failed or was blocked.<br><br>This field is conditionally returned if the <b>status</b> value of the report is <code>ClarificationRequired</code> or <code>SubmissionFailed</code>.
     * @return string|null
    */
    public function getReasonForFailure(): ?string {
        return $this->reasonForFailure;
    }

    /**
     * Gets the status property value. The current status of the VeRO reported item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportedItemStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('reasonForFailure', $this->getReasonForFailure());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the itemId property value. The unique identifier of the listing that is being reported for copyright, trademark, or intellectual right infringement.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the reasonForFailure property value. This text explanation is submitted by eBay when the submission of a VeRO Report has failed or was blocked.<br><br>This field is conditionally returned if the <b>status</b> value of the report is <code>ClarificationRequired</code> or <code>SubmissionFailed</code>.
     * @param string|null $value Value to set for the reasonForFailure property.
    */
    public function setReasonForFailure(?string $value): void {
        $this->reasonForFailure = $value;
    }

    /**
     * Sets the status property value. The current status of the VeRO reported item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/vero/types/VeroReportedItemStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
