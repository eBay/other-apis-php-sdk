<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container associated with the <b>getAddressPreferences</b> method.
*/
class GetAddressPreferenceListResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var GetAddressPreferenceListResponsesData|null $addressPreferenceList This type defines the list of addresses associated with a eDIS account.
    */
    private ?GetAddressPreferenceListResponsesData $addressPreferenceList = null;
    
    /**
     * Instantiates a new GetAddressPreferenceListResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetAddressPreferenceListResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetAddressPreferenceListResponses {
        return new GetAddressPreferenceListResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressPreferenceList property value. This type defines the list of addresses associated with a eDIS account.
     * @return GetAddressPreferenceListResponsesData|null
    */
    public function getAddressPreferenceList(): ?GetAddressPreferenceListResponsesData {
        return $this->addressPreferenceList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addressPreferenceList' => fn(ParseNode $n) => $o->setAddressPreferenceList($n->getObjectValue([GetAddressPreferenceListResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('addressPreferenceList', $this->getAddressPreferenceList());
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
     * Sets the addressPreferenceList property value. This type defines the list of addresses associated with a eDIS account.
     * @param GetAddressPreferenceListResponsesData|null $value Value to set for the addressPreferenceList property.
    */
    public function setAddressPreferenceList(?GetAddressPreferenceListResponsesData $value): void {
        $this->addressPreferenceList = $value;
    }

}
