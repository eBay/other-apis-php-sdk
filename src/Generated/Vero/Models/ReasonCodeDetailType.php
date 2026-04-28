<?php

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the brief and detailed description of a VeRO infringement, as well as the ID associated with the infringement.
*/
class ReasonCodeDetailType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $briefText The short description of the infringement associated with the reason code.
    */
    private ?string $briefText = null;
    
    /**
     * @var string|null $detailedText The long description of the infringement associated with the reason code.
    */
    private ?string $detailedText = null;
    
    /**
     * @var string|null $veroReasonCodeId The unique identifier of a VeRO reason code.
    */
    private ?string $veroReasonCodeId = null;
    
    /**
     * Instantiates a new ReasonCodeDetailType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReasonCodeDetailType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReasonCodeDetailType {
        return new ReasonCodeDetailType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the briefText property value. The short description of the infringement associated with the reason code.
     * @return string|null
    */
    public function getBriefText(): ?string {
        return $this->briefText;
    }

    /**
     * Gets the detailedText property value. The long description of the infringement associated with the reason code.
     * @return string|null
    */
    public function getDetailedText(): ?string {
        return $this->detailedText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'briefText' => fn(ParseNode $n) => $o->setBriefText($n->getStringValue()),
            'detailedText' => fn(ParseNode $n) => $o->setDetailedText($n->getStringValue()),
            'veroReasonCodeId' => fn(ParseNode $n) => $o->setVeroReasonCodeId($n->getStringValue()),
        ];
    }

    /**
     * Gets the veroReasonCodeId property value. The unique identifier of a VeRO reason code.
     * @return string|null
    */
    public function getVeroReasonCodeId(): ?string {
        return $this->veroReasonCodeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('briefText', $this->getBriefText());
        $writer->writeStringValue('detailedText', $this->getDetailedText());
        $writer->writeStringValue('veroReasonCodeId', $this->getVeroReasonCodeId());
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
     * Sets the briefText property value. The short description of the infringement associated with the reason code.
     * @param string|null $value Value to set for the briefText property.
    */
    public function setBriefText(?string $value): void {
        $this->briefText = $value;
    }

    /**
     * Sets the detailedText property value. The long description of the infringement associated with the reason code.
     * @param string|null $value Value to set for the detailedText property.
    */
    public function setDetailedText(?string $value): void {
        $this->detailedText = $value;
    }

    /**
     * Sets the veroReasonCodeId property value. The unique identifier of a VeRO reason code.
     * @param string|null $value Value to set for the veroReasonCodeId property.
    */
    public function setVeroReasonCodeId(?string $value): void {
        $this->veroReasonCodeId = $value;
    }

}
