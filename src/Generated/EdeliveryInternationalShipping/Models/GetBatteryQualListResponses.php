<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the <b>getbatteryQualifications</b> method.
*/
class GetBatteryQualListResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var GetBatteryQualListResponsesData|null $batteryQualificationList This type defines the fields in a paginated result set of battery qualifications associated with a seller's eDIS account. The response consists of 0 or more sequenced pages that are returned from the complete result set, where each page consists of 0 or more items.
    */
    private ?GetBatteryQualListResponsesData $batteryQualificationList = null;
    
    /**
     * Instantiates a new GetBatteryQualListResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetBatteryQualListResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetBatteryQualListResponses {
        return new GetBatteryQualListResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the batteryQualificationList property value. This type defines the fields in a paginated result set of battery qualifications associated with a seller's eDIS account. The response consists of 0 or more sequenced pages that are returned from the complete result set, where each page consists of 0 or more items.
     * @return GetBatteryQualListResponsesData|null
    */
    public function getBatteryQualificationList(): ?GetBatteryQualListResponsesData {
        return $this->batteryQualificationList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'batteryQualificationList' => fn(ParseNode $n) => $o->setBatteryQualificationList($n->getObjectValue([GetBatteryQualListResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('batteryQualificationList', $this->getBatteryQualificationList());
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
     * Sets the batteryQualificationList property value. This type defines the fields in a paginated result set of battery qualifications associated with a seller's eDIS account. The response consists of 0 or more sequenced pages that are returned from the complete result set, where each page consists of 0 or more items.
     * @param GetBatteryQualListResponsesData|null $value Value to set for the batteryQualificationList property.
    */
    public function setBatteryQualificationList(?GetBatteryQualListResponsesData $value): void {
        $this->batteryQualificationList = $value;
    }

}
