<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the </b>getService</b> method.
*/
class GetServiceListResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var GetServiceListResponsesData|null $serviceList This type defines the details returned for the retrieved shipping service(s).
    */
    private ?GetServiceListResponsesData $serviceList = null;
    
    /**
     * Instantiates a new GetServiceListResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetServiceListResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetServiceListResponses {
        return new GetServiceListResponses();
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
            'serviceList' => fn(ParseNode $n) => $o->setServiceList($n->getObjectValue([GetServiceListResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the serviceList property value. This type defines the details returned for the retrieved shipping service(s).
     * @return GetServiceListResponsesData|null
    */
    public function getServiceList(): ?GetServiceListResponsesData {
        return $this->serviceList;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('serviceList', $this->getServiceList());
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
     * Sets the serviceList property value. This type defines the details returned for the retrieved shipping service(s).
     * @param GetServiceListResponsesData|null $value Value to set for the serviceList property.
    */
    public function setServiceList(?GetServiceListResponsesData $value): void {
        $this->serviceList = $value;
    }

}
