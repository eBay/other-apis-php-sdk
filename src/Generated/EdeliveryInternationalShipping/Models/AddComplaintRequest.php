<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to define the request container of the <b>createComplaint</b> method.
*/
class AddComplaintRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AddComplaintRequestData|null $complaintRequest This type specifies the information included in a complaint request.
    */
    private ?AddComplaintRequestData $complaintRequest = null;
    
    /**
     * Instantiates a new AddComplaintRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddComplaintRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddComplaintRequest {
        return new AddComplaintRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the complaintRequest property value. This type specifies the information included in a complaint request.
     * @return AddComplaintRequestData|null
    */
    public function getComplaintRequest(): ?AddComplaintRequestData {
        return $this->complaintRequest;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'complaintRequest' => fn(ParseNode $n) => $o->setComplaintRequest($n->getObjectValue([AddComplaintRequestData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('complaintRequest', $this->getComplaintRequest());
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
     * Sets the complaintRequest property value. This type specifies the information included in a complaint request.
     * @param AddComplaintRequestData|null $value Value to set for the complaintRequest property.
    */
    public function setComplaintRequest(?AddComplaintRequestData $value): void {
        $this->complaintRequest = $value;
    }

}
