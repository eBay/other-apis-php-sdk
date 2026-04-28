<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container for the <b>createConsignPreference</b> method.
*/
class CreateConsignPreferenceResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CreateConsignPreferenceResponsesData|null $consignAddressId This type defines the unique identifier of the newly created consign address.
    */
    private ?CreateConsignPreferenceResponsesData $consignAddressId = null;
    
    /**
     * Instantiates a new CreateConsignPreferenceResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateConsignPreferenceResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateConsignPreferenceResponses {
        return new CreateConsignPreferenceResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the consignAddressId property value. This type defines the unique identifier of the newly created consign address.
     * @return CreateConsignPreferenceResponsesData|null
    */
    public function getConsignAddressId(): ?CreateConsignPreferenceResponsesData {
        return $this->consignAddressId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consignAddressId' => fn(ParseNode $n) => $o->setConsignAddressId($n->getObjectValue([CreateConsignPreferenceResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('consignAddressId', $this->getConsignAddressId());
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
     * Sets the consignAddressId property value. This type defines the unique identifier of the newly created consign address.
     * @param CreateConsignPreferenceResponsesData|null $value Value to set for the consignAddressId property.
    */
    public function setConsignAddressId(?CreateConsignPreferenceResponsesData $value): void {
        $this->consignAddressId = $value;
    }

}
