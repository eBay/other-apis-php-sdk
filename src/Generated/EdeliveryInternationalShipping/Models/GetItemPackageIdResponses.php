<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the <b>getPackageByLineItemID</b> method.
*/
class GetItemPackageIdResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<GetItemPackageIdResponsesData>|null $itemPackages This array returns a list of packages associated with the specified line item ID.
    */
    private ?array $itemPackages = null;
    
    /**
     * Instantiates a new GetItemPackageIdResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetItemPackageIdResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetItemPackageIdResponses {
        return new GetItemPackageIdResponses();
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
            'itemPackages' => fn(ParseNode $n) => $o->setItemPackages($n->getCollectionOfObjectValues([GetItemPackageIdResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemPackages property value. This array returns a list of packages associated with the specified line item ID.
     * @return array<GetItemPackageIdResponsesData>|null
    */
    public function getItemPackages(): ?array {
        return $this->itemPackages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('itemPackages', $this->getItemPackages());
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
     * Sets the itemPackages property value. This array returns a list of packages associated with the specified line item ID.
     * @param array<GetItemPackageIdResponsesData>|null $value Value to set for the itemPackages property.
    */
    public function setItemPackages(?array $value): void {
        $this->itemPackages = $value;
    }

}
