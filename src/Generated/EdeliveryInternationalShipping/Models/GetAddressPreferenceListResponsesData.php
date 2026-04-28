<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the list of addresses associated with a eDIS account.
*/
class GetAddressPreferenceListResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<GetAddressPreferencesResponses>|null $addresses This array returns a list of address, contact, and identifier information for each of a seller's ship-from and/or return addresses associated with their eDIS account.
    */
    private ?array $addresses = null;
    
    /**
     * Instantiates a new GetAddressPreferenceListResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetAddressPreferenceListResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetAddressPreferenceListResponsesData {
        return new GetAddressPreferenceListResponsesData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addresses property value. This array returns a list of address, contact, and identifier information for each of a seller's ship-from and/or return addresses associated with their eDIS account.
     * @return array<GetAddressPreferencesResponses>|null
    */
    public function getAddresses(): ?array {
        return $this->addresses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([GetAddressPreferencesResponses::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
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
     * Sets the addresses property value. This array returns a list of address, contact, and identifier information for each of a seller's ship-from and/or return addresses associated with their eDIS account.
     * @param array<GetAddressPreferencesResponses>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->addresses = $value;
    }

}
