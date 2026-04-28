<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the <b>getBundleLabel</b> method.
*/
class BundleLabelResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BundleLabelResponseData|null $label This type defines the base64 string value used to download a bundle label PDF file.
    */
    private ?BundleLabelResponseData $label = null;
    
    /**
     * Instantiates a new BundleLabelResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BundleLabelResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BundleLabelResponse {
        return new BundleLabelResponse();
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
            'label' => fn(ParseNode $n) => $o->setLabel($n->getObjectValue([BundleLabelResponseData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the label property value. This type defines the base64 string value used to download a bundle label PDF file.
     * @return BundleLabelResponseData|null
    */
    public function getLabel(): ?BundleLabelResponseData {
        return $this->label;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('label', $this->getLabel());
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
     * Sets the label property value. This type defines the base64 string value used to download a bundle label PDF file.
     * @param BundleLabelResponseData|null $value Value to set for the label property.
    */
    public function setLabel(?BundleLabelResponseData $value): void {
        $this->label = $value;
    }

}
