<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the package ID, payment cost, tracking number, and last-mile tracking number (if applicable) for the cloned package.
*/
class ClonePackageResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $lastMileTrackingNumber The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
    */
    private ?string $lastMileTrackingNumber = null;
    
    /**
     * @var string|null $packageId The unique identifier of the package. A new <b>packageId</b> value is generated when a package is cloned.
    */
    private ?string $packageId = null;
    
    /**
     * @var Amount|null $paymentCost This type defines the monetary value of an amount. 
    */
    private ?Amount $paymentCost = null;
    
    /**
     * @var string|null $trackingNumber The tracking number for the cloned package.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ClonePackageResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClonePackageResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClonePackageResponsesData {
        return new ClonePackageResponsesData();
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
            'lastMileTrackingNumber' => fn(ParseNode $n) => $o->setLastMileTrackingNumber($n->getStringValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'paymentCost' => fn(ParseNode $n) => $o->setPaymentCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @return string|null
    */
    public function getLastMileTrackingNumber(): ?string {
        return $this->lastMileTrackingNumber;
    }

    /**
     * Gets the packageId property value. The unique identifier of the package. A new <b>packageId</b> value is generated when a package is cloned.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the paymentCost property value. This type defines the monetary value of an amount. 
     * @return Amount|null
    */
    public function getPaymentCost(): ?Amount {
        return $this->paymentCost;
    }

    /**
     * Gets the trackingNumber property value. The tracking number for the cloned package.
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('lastMileTrackingNumber', $this->getLastMileTrackingNumber());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeObjectValue('paymentCost', $this->getPaymentCost());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
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
     * Sets the lastMileTrackingNumber property value. The last-mile tracking number of the package.<br><br>This field is only returned if the last-mile tracking number is provided by the carrier.
     * @param string|null $value Value to set for the lastMileTrackingNumber property.
    */
    public function setLastMileTrackingNumber(?string $value): void {
        $this->lastMileTrackingNumber = $value;
    }

    /**
     * Sets the packageId property value. The unique identifier of the package. A new <b>packageId</b> value is generated when a package is cloned.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->packageId = $value;
    }

    /**
     * Sets the paymentCost property value. This type defines the monetary value of an amount. 
     * @param Amount|null $value Value to set for the paymentCost property.
    */
    public function setPaymentCost(?Amount $value): void {
        $this->paymentCost = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number for the cloned package.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
