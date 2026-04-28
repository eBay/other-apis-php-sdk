<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the <b>getLabels</b> method.
*/
class GetLabelListResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<GetLabelListResponsesData>|null $labels This array returns the shipping label information, such as the base64 string value and result code for each specified tracking number.
    */
    private ?array $labels = null;
    
    /**
     * Instantiates a new GetLabelListResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetLabelListResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetLabelListResponses {
        return new GetLabelListResponses();
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
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getCollectionOfObjectValues([GetLabelListResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the labels property value. This array returns the shipping label information, such as the base64 string value and result code for each specified tracking number.
     * @return array<GetLabelListResponsesData>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('labels', $this->getLabels());
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
     * Sets the labels property value. This array returns the shipping label information, such as the base64 string value and result code for each specified tracking number.
     * @param array<GetLabelListResponsesData>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value): void {
        $this->labels = $value;
    }

}
